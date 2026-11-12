# 🕵️‍♀️ MISSIN — Plataforma Gamificada para Aprendizado de LIBRAS

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-PDO-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/Status-Em%20Valida%C3%A7%C3%A3o-yellow?style=for-the-badge)

> **MISSIN** é um projeto de Trabalho de Conclusão de Curso (TCC) do **Bacharelado em Sistemas de Informação** do **Instituto Federal do Norte de Minas Gerais (IFNMG — Campus Pirapora)**, desenvolvido por mim, **Beatriz Souza**.

---

## 📌 Sobre o Projeto

O **MISSIN** é uma plataforma web interativa e gamificada projetada para auxiliar pessoas ouvintes a aprenderem a **Língua Brasileira de Sinais (LIBRAS)** de forma divertida, gratuita e próxima da "vida real" da pessoa surda.

Por meio de uma narrativa investigativa dividida em módulos e missões ("Casos"), o usuário assume o papel de um investigador criminal encarregado de desvendar mistérios — como o desaparecimento de Ana — analisando depoimentos gravados inteiramente em LIBRAS e respondendo a quizzes de compreensão.

---

## 🎯 Objetivos

- **Inclusão e Empatia:** Promover o aprendizado acessível de LIBRAS para aproximar ouvintes da Comunidade Surda Brasileira.
- **Engajamento Gamificado:** Utilizar mecânicas de mistério, investigação, pontuação e desbloqueio progressivo de etapas para manter o aluno motivado.
- **Aprendizado Contextualizado:** Apresentar sinais isolados no dicionário de preparação antes de expor o estudante a diálogos completos nos depoimentos.

---

## 🛠️ Tecnologias Utilizadas

### **Front-end**
- **HTML5 & CSS3:** Estruturação semântica e layout responsivo.
- **Bootstrap 5:** Sistema de grid, cards, modais e componentes de interface.
- **JavaScript (ES6+) / jQuery:** Manipulação dinâmica de elementos e interatividade.
- **Iconify / Solar Icons:** Biblioteca de ícones vetoriais.
- **AOS (Animate On Scroll):** Animações visuais na rolagem da página.

### **Back-end & Banco de Dados**
- **PHP 8.x:** Regras de negócio, autenticação, controle de sessões e validação de quizzes.
- **MySQL / PDO:** Persistência relacional segura com *Prepared Statements* para usuários, vídeos, dicionário e progresso.

---

## 📂 Estrutura de Pastas e Arquivos

```text
missin/
├── assets/                  # Arquivos estáticos e mídias
│   ├── css/                 # Estilos customizados (styles.css)
│   ├── images/              # Logos, banners, cenas dos casos e equipe
│   ├── js/                  # Scripts customizados da aplicação
│   ├── libs/                # Bibliotecas de terceiros (Bootstrap, jQuery)
│   ├── scss/                # Arquivos fonte de estilo Sass
│   └── videos/              # Depoimentos, videoaula introdutória e sinais avulsos
│
├── html/                    # Área pública da plataforma
│   ├── includes/            # Componentes reutilizáveis e núcleo do sistema
│   │   ├── db.php           # Conexão PDO com o banco de dados MySQL
│   │   ├── footer.php       # Rodapé global e atribuição de créditos
│   │   ├── functions.php    # Controle de autenticação e funções auxiliares
│   │   ├── header.php       # Barra de navegação dinâmica
│   │   └── team.php         # Seção de apresentação da equipe
│   ├── about-us.php         # Sobre o projeto e motivação acadêmica
│   ├── blog.php             # Conteúdos informativos sobre Cultura Surda e LIBRAS
│   ├── contact.php          # Canal de contato e feedback
│   ├── dicionario.php       # Glossário de sinais de A a Z com reprodução em vídeo
│   ├── index.php            # Página inicial pública (Landing Page)
│   ├── logout.php           # Encerramento seguro de sessão
│   ├── sign-in.php          # Tela de login de investigadores
│   └── sign-up.php          # Tela de cadastro de novos usuários
│
├── jogo/                    # Área restrita do jogo (Requer Login)
│   ├── index.php            # Central de Casos e Videoaula Opcional
│   ├── missao.php           # Ambiente de investigação (Dicionário, Vídeo e Quiz)
│   └── processa_quiz.php    # Correção automática, cálculo de notas e desbloqueio
│
├── .gitignore               # Arquivos sensíveis e temporários ignorados pelo Git
├── config_exemplo.php       # Modelo de configuração de constantes do sistema
└── README.md                # Documentação do projeto

```

---

## 🗄️ Arquitetura do Banco de Dados (MySQL)

O banco de dados relacional (`missin`) foi estruturado com integridade referencial (`FOREIGN KEY`) e é composto pelas seguintes tabelas:

* `usuario`: Credenciais dos jogadores com senhas protegidas por hash (`password_hash`).
* `unidade`: Casos investigativos disponíveis na plataforma.
* `missao`: Etapas de cada caso (Depoimentos e Veredito Final).
* `video`: Referências aos arquivos de vídeo dos depoimentos em LIBRAS.
* `dicionario`: Acervo de sinais avulsos categorizados de A a Z.
* `introducao`: Vincula os sinais do dicionário à etapa preparatória de cada parte da missão.
* `quiz_historia`: Organiza as partes avaliativas de cada depoimento.
* `pergunta` & `alternativa_historia`: Questões e alternativas (em texto ou vídeo) com marcação da resposta correta.
* `progresso`: Armazena a pontuação máxima atingida e o status de desbloqueio por usuário e missão.

---

## 🚀 Como Executar o Projeto Localmente

### **Pré-requisitos**

* Ambiente de servidor local com suporte a **PHP 8.x** e **MySQL / MariaDB** (ex: **XAMPP**, **Laragon** ou **WampServer**).

### **Passo a Passo**

1. **Clonar o Repositório:**
Mova ou clone a pasta do projeto para o diretório público do seu servidor local (ex: `C:\xampp\htdocs\missin`).
2. **Configurar as Constantes do Sistema:**
* Renomeie o arquivo `config_exemplo.php` na raiz do projeto para `config.php`.
* Preencha as URLs e constantes necessárias conforme o seu ambiente.


3. **Criar e Popular o Banco de Dados:**
* Acesse o **phpMyAdmin** (`http://localhost/phpmyadmin`).
* Crie um banco de dados chamado `missin` com collation `utf8mb4_general_ci`.
* Importe o script SQL de estrutura e população do banco.

> **📦 Pacote de Mídias (Vídeos):** Devido ao limite de armazenamento do GitHub, os arquivos `.mp4` dos depoimentos e sinais avulsos estão hospedados externamente. [Clique aqui para baixar a pasta `videos` no Google Drive](https://drive.google.com/drive/folders/1oWPLlnMnxrjnamgM_Ky4ijfHo-4kN_Px?usp=sharing) e extraia o conteúdo dentro de `assets/videos/`.

4. **Verificar Credenciais do Banco (`html/includes/db.php`):**
```php
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$dbname = 'missin';

```


5. **Iniciar a Aplicação:**
Com o Apache e o MySQL ativos, acesse no navegador:
```text
http://localhost/missin/html/index.php

```



---

## 🧹 Manutenção do Banco (Ordem de Exclusão)

Caso precise resetar ou recriar as tabelas manualmente durante testes, respeite a hierarquia das chaves estrangeiras (`FOREIGN KEYS`):

```sql
-- 1. Tabelas filhas (com dependências diretas)
DROP TABLE IF EXISTS `progresso`;
DROP TABLE IF EXISTS `alternativa_historia`;
DROP TABLE IF EXISTS `introducao`;
DROP TABLE IF EXISTS `pergunta`;

-- 2. Tabelas intermediárias
DROP TABLE IF EXISTS `quiz_historia`;
DROP TABLE IF EXISTS `video`;
DROP TABLE IF EXISTS `missao`;

-- 3. Tabelas base (pais)
DROP TABLE IF EXISTS `dicionario`;
DROP TABLE IF EXISTS `unidade`;
DROP TABLE IF EXISTS `usuario`;

```

---

## 👥 Equipe do Projeto

* **Beatriz Souza** — *Idealização, Arquitetura e Desenvolvimento Full-Stack* (Autora do TCC)
* **Stella Souza** — *Tradução & Revisão Linguística*
* **Paloma** — *Intérprete de LIBRAS*
* **Isadora** — *Intérprete de LIBRAS*

---

## 📜 Licença e Créditos

Este projeto foi desenvolvido exclusivamente para fins **acadêmicos, educacionais e de utilidade pública gratuita**.

* **Recursos Visuais:** Imagens e ícones obtidos através das plataformas Unsplash, Pixabay e Iconify.
* **Template Base:** Adaptado a partir do tema *Studiova* ([ThemeWagon](https://themewagon.com/themes/studiova/)).
* É proibida a comercialização não autorizada do código-fonte ou dos vídeos autorais produzidos para esta plataforma.

---

*Desenvolvido com 💜 no IFNMG — Campus Pirapora para conectar pessoas por meio da inclusão linguística.*