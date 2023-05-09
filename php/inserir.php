<?php
// Estabelece a conexão com o banco de dados
$servername = "%";
$username = "Admin";
$password = "admin123";
$dbname = "finance";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

// Consulta SQL para inserir os dados na tabela
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

// Executar a consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>