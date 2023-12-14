<?php
$servername = "seu_servidor_mysql";
$username = "seu_usuario_mysql";
$password = "sua_senha_mysql";
$dbname = "recuperacao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
