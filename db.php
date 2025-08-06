<?php
$host = "sql308.infinityfree.com"; // host infinitefree
$user = "if0_39645844";      // seu usuário MySQL
$pass = "208KqnHO2d";         // sua senha MySQL
$db   = "if0_39645844_Cadastro";  // seu banco de dados

$conn = new mysqli($host, $user, $pass, $db)

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!";
}
?>
