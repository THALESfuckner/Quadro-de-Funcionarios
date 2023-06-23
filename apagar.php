<?php

$db_host = 'localhost';
$db_name = 'DevWebS';
$db_user = 'root';
$db_senha = '';

// 
$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_senha); 


$CPF = $_GET['CPF'];


$query = $conexao->prepare('DELETE FROM Cadastro WHERE CPF = :CPF');
$query->bindValue(':CPF', $CPF);
$query->execute();

header("Location: ./ListaFuncionario.php");exit();
?>