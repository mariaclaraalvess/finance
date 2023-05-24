// Definindo as variáveis
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finance";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checando a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

echo "Sucesso na conexão";

mysqli_close($conn);
