<?php

//definindo váriavéis 

$servername = "%";
$database = "finance";
$username = "Admin";
$password = "admin123";
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