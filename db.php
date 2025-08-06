<?php
$host = "sql308.infinityfree.com";
$user = "if0_39645844";      
$pass = "208KqnHO2d";         
$db   = "if0_39645844_Cadastro"; 

$conn = new mysqli($host, $user, $pass, $db)

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!";
}
?>
