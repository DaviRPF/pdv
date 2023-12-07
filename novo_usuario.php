<?php

include "conexao.php";



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";

$pdo->query($sql);





?>


