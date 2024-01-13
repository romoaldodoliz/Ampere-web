<?php
$host = "localhost:8889";
$usuario = "root";
$senha = "root";
$banco = "ampere-web";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>