<?php
// Estabelece a conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finance";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Limpar os dados para evitar injeção de SQL (recomendado)
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);
    $senha = mysqli_real_escape_string($conn, $senha);

    // Consulta SQL para inserir os dados na tabela
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    // Executar a consulta SQL
    if (mysqli_query($conn, $sql)) {
        // Redireciona para a tela de login após o cadastro
        header("Location: login.php");
        exit;
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conn);
    }
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>
