<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ../html/sign-in.php");
    exit;
}

require_once '../html/includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario_id = $_SESSION['usuario_id'];
    $unidade_id = filter_input(INPUT_POST, 'unidade_id', FILTER_VALIDATE_INT) ?: 1;
    $missao_id  = filter_input(INPUT_POST, 'missao_id', FILTER_VALIDATE_INT) ?: 1;
    $parte      = filter_input(INPUT_POST, 'parte', FILTER_VALIDATE_INT);

    if (!$missao_id || !$parte) {
        header("Location: missao.php?unidade_id=" . $unidade_id);
        exit;
    }

    try {
        // Busca as perguntas e a pontuação da parte ativa
        $stmt_perg = $conn->prepare("
        SELECT p.id AS pergunta_id, COUNT(p.id) AS pontos_quiz
        FROM pergunta p
        INNER JOIN quiz_historia qh ON p.quiz_historia_id = qh.id
        WHERE qh.missao_id = ? AND qh.num_parte = ?
        GROUP BY p.id
    ");
        $stmt_perg->execute([$missao_id, $parte]);
        $perguntas = $stmt_perg->fetchAll(PDO::FETCH_ASSOC);

        $total_perguntas = count($perguntas);
        $acertos = 0;

        foreach ($perguntas as $q) {
            $campo_name = "questao_" . $q['pergunta_id'];
            if (isset($_POST[$campo_name])) {
                $alternativa_marcada_id = (int)$_POST[$campo_name];

                $stmt_alt = $conn->prepare("SELECT correta FROM alternativa_historia WHERE id = ? AND pergunta_id = ?");
                $stmt_alt->execute([$alternativa_marcada_id, $q['pergunta_id']]);
                $alt = $stmt_alt->fetch(PDO::FETCH_ASSOC);

                if ($alt && $alt['correta'] == 1) {
                    $acertos++;
                }
            }
        }

        // --- REGRA ESPECIAL DO QUIZ FINAL (MISSÃO 4) ---
        if ($missao_id == 4) {
            $total_perguntas = count($perguntas);
            $acertos = 0;

            foreach ($perguntas as $q) {
                $campo_name = "questao_" . $q['pergunta_id'];
                if (isset($_POST[$campo_name])) {
                    $alternativa_marcada_id = (int)$_POST[$campo_name];

                    $stmt_alt = $conn->prepare("SELECT correta FROM alternativa_historia WHERE id = ? AND pergunta_id = ?");
                    $stmt_alt->execute([$alternativa_marcada_id, $q['pergunta_id']]);
                    $alt = $stmt_alt->fetch(PDO::FETCH_ASSOC);

                    if ($alt && $alt['correta'] == 1) {
                        $acertos++;
                    }
                }
            }

        // Cada resposta certa vale 4.0 pontos
        $pontos_final = $acertos * 4.00;

        // Grava a nota no MySQLa
        $stmt_prog = $conn->prepare("
            INSERT INTO progresso (usuario_id, missao_id, pontuacaoGeral, desbloqueada)
            VALUES (?, 4, ?, 1)
            ON DUPLICATE KEY UPDATE pontuacaoGeral = GREATEST(pontuacaoGeral, VALUES(pontuacaoGeral)), desbloqueada = 1
        ");
        $stmt_prog->execute([$usuario_id, $pontos_final]);

        // Regra de aprovação: 8.0 ou 12.0 pontos passam; 4.0 ou menos precisa refazer
        if ($pontos_final >= 8.00) {
            $_SESSION['modal_caso_concluido'] = [
                'titulo'   => 'CASO 01 DESVENDADO',
                'subtitulo'=> 'O Desaparecimento de Ana foi Solucionado!',
                'acertos'  => $acertos,
                'total'    => $total_perguntas,
                'pontos'   => number_format($pontos_final, 1, ',', '.')
            ];

            header("Location: index.php?caso_concluido=1");
            exit;
        } else {
            $_SESSION['feedback_quiz'] = [
                'tipo' => 'danger',
                'mensagem' => "Infelizmente você fez apenas " . number_format($pontos_final, 1, ',', '.') . " pontos (acertou {$acertos} de {$total_perguntas}). A pontuação mínima para aprovação é 8,0 pontos. Revise as pistas e tente novamente!"
            ];
            header("Location: missao.php?unidade_id={$unidade_id}&missao_id=4&parte=1");
            exit;
        }
    }

        // SE FOR UMA MISSÃO NORMAL (MISSOES 1, 2 OU 3)
        $pontos_parte = ($total_perguntas > 0) ? ($acertos / $total_perguntas) * 2.50 : 0.00;

        $_SESSION['progresso'][$missao_id][$parte] = [
            'acertos' => $acertos,
            'total'   => $total_perguntas,
            'pontos'  => $pontos_parte
        ];

        // SE FOR A PARTE 4 DE UMA MISSÃO NORMAL
        if ($parte == 4) {
            $pontuacao_total_missao = 0.00;
            for ($i = 1; $i <= 4; $i++) {
                if (isset($_SESSION['progresso'][$missao_id][$i])) {
                    $pontuacao_total_missao += $_SESSION['progresso'][$missao_id][$i]['pontos'];
                }
            }

            // Atualiza a pontuação geral da missão no MySQL
            $stmt_prog = $conn->prepare("
                INSERT INTO progresso (usuario_id, missao_id, pontuacaoGeral, desbloqueada)
                VALUES (?, ?, ?, 1)
                ON DUPLICATE KEY UPDATE pontuacaoGeral = GREATEST(pontuacaoGeral, VALUES(pontuacaoGeral)), desbloqueada = 1
            ");
            $stmt_prog->execute([$usuario_id, $missao_id, $pontuacao_total_missao]);

            if ($pontuacao_total_missao >= 6.00) {
                $proxima_missao = $missao_id + 1;
                
                $stmt_desbloqueia = $conn->prepare("
                    INSERT INTO progresso (usuario_id, missao_id, pontuacaoGeral, desbloqueada)
                    VALUES (?, ?, 0.00, 1)
                    ON DUPLICATE KEY UPDATE desbloqueada = 1
                ");
                $stmt_desbloqueia->execute([$usuario_id, $proxima_missao]);

                $_SESSION['desbloqueadas'][$proxima_missao] = true;

                $_SESSION['feedback_quiz'] = [
                    'tipo' => 'success',
                    'mensagem' => "Parabéns, Investigador! Alcançou " . number_format($pontuacao_total_missao, 1, ',', '.') . " pontos (mínimo 6,0) e liberou o próximo depoimento!"
                ];

                header("Location: missao.php?unidade_id={$unidade_id}&missao_id={$proxima_missao}&parte=1");
                exit;
            } else {
                $_SESSION['feedback_quiz'] = [
                    'tipo' => 'danger',
                    'mensagem' => "Infelizmente obteve " . number_format($pontuacao_total_missao, 1, ',', '.') . " de 10,0 pontos. A pontuação mínima é 6,0 (60%). Revise os vídeos e tente novamente!"
                ];

                header("Location: missao.php?unidade_id={$unidade_id}&missao_id={$missao_id}&parte=1");
                exit;
            }
        } else {
            // Se for Parte 1, 2 ou 3 de uma missão normal
            $proxima_parte = $parte + 1;
            $_SESSION['feedback_quiz'] = [
                'tipo' => 'success',
                'mensagem' => "Parte {$parte} concluída! Somou " . number_format($pontos_parte, 2, ',', '.') . " pontos nesta etapa."
            ];

            header("Location: missao.php?unidade_id={$unidade_id}&missao_id={$missao_id}&parte={$proxima_parte}");
            exit;
        }

    } catch (PDOException $e) {
        die("Erro ao processar o quiz: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit;
}