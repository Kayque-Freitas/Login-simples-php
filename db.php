<?php
$host = "sql308.infinityfree.com"; //meu host da infinity free
$user = "if0_39645844";            //meu user
$pass = "208KqnHO2d";              //minha senha
$db   = "if0_39645844_Cadastro";   //nome do meu banco de dados

$conn = new mysqli($host, $user, $pass, $db)

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
} else {
    echo "Conectado com sucesso!";
}
?>
