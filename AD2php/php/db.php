<?php
// fim: 30/09/2024 - 10:27
$host = "localhost"; // endereço do servidor MySQL
$user = "Iara";  // usuário do MySQL
$pass = "123456";      // senha do MySQL
$dbname = "escola";  // nome do banco de dados
$port = "3307"; // porta do MySQL

// estabelece a conexão com o banco de dados
$conn = new mysqli($host,$user,$pass,$dbname,3307);

// verifica se há erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
