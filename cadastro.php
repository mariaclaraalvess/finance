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

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Limpar os dados para evitar injeção de SQL (recomendado)
$nome = mysqli_real_escape_string($conn, $nome);
$email = mysqli_real_escape_string($conn, $email);
$senha = mysqli_real_escape_string($conn, $senha);

// Consulta SQL para inserir os dados na tabela correta ("usuario" em vez de "cadastro")
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// Executar a consulta SQL usando declaração preparada
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_execute($stmt);
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . mysqli_error($conn);
}

// Fechar a declaração e a conexão com o banco de dados
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
