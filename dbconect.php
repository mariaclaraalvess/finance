<?php

//definindo váriavéis 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finance";

// Criando conexão

$conn = mysqli_connect($servername, $username, $password, $database);

// Checando conexão

if (!$conn) {
    die("Conexão falhou " . mysqli_connect_error());
}
echo "Sucesso na conexão";
mysqli_close($conn);
?>