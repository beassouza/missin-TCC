<?php
// Detecta se o site está rodando no computador local ou na internet
if($_SERVER['SERVER_NAME'] == 'localhost'){
    //Configurações do XAMPP [local]
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = "missin";
} else {
    // Configurações da Hospedagem (Remoto)
    $host = "sql123.hospedagem.com";
    $user = "usuario_remoto";
    $pass = "senha_dificil";
    $dbname = "banco_online";
}

try{
// A string de conexão precisa desse formato "mysql:host=..."
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//define o fuso horário para salvar o progresso corretamente
$conn->exec("SET time_zone = '-03:00'");
} catch(PDOException $e) {
    //Em produção (else), é melhor não dar 'echo no erro pro usuário não ver sua senha
    error_log('Erro de Conexão: ' . $e->getMessage());
    die('Ops! Tivemos um problema técnico. ');
}

?>