<?php
$db_host = 'localhost';
$db_name = 'DevWebS';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host; dbname=$db_name; charset=utf8", $db_user, $db_senha);

$cpf = $_POST['cpf'];
$nome = $_POST['nome']; 
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$setor = $_POST['setor']; 



    $query = $conexao->prepare('INSERT INTO Cadastro (  cpf,
                                                        nome, 
                                                        sobrenome, 
                                                        email,  
                                                        setor )  VALUES (:cpf,
                                                                        :nome,
                                                                        :sobrenome,
                                                                        :email,  
                                                                        :setor )');
    $query->bindValue(':cpf', $cpf);
    $query->bindValue(':nome', $nome);
    $query->bindValue(':sobrenome', $sobrenome);
    $query->bindValue(':email', $email);
    $query->bindValue(':setor', $setor);

    
    $query->execute();// redireciona para a pagina listafuncionario.php 
header("Location: ./ListaFuncionario.php");exit();?>