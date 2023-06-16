<?php
$db_host = 'localhost';
$db_name = 'CadastroFuncionario';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_senha);


$nome = $_POST['Nome']; 
$sobrenome = $_POST['Sobrenome'];
$cpf = $_POST['CPF'];
$setor = $_POST['Setor'];
$tipo = $_POST['Tipo'];
$email = $_POST['Email'];

    
   

    $query = $conexao->prepare('INSERT INTO Cadastro (  Nome,
                                                        Sobrenome, 
                                                        CPF, 
                                                        Setor, 
                                                        Tipo, 
                                                        Email )  VALUES (:Nome,
                                                                        :Sobrenome,
                                                                        :CPF,
                                                                        :Setor, 
                                                                        :Tipo 
                                                                        :Email )');

    $query->bindValue(':descricao', $descricao);

    $query->bindValue(':Nome', $nome);
    $query->bindValue(':Sobrenome', $sobrenome);
    $query->bindValue(':CPF', $cpf);
    $query->bindValue(':Setor', $setor);
    $query->bindValue(':Tipo', $tipo);
    $query->bindValue(':Email', $email);

  
    
    $query->execute();// redireciona para a pagina listafuncionario.php 
header("Location: ./listaFuncionario.php");exit();?>