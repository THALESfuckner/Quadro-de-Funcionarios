<?php
$db_host = 'localhost';
$db_name = 'CadastroFuncionario';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_senha);


$Nome = $_POST['Nome']; 
$Sobrenome = $_POST['Sobrenome'];
$CPF = $_POST['CPF'];
$Setor = $_POST['Setor'];
$Tipo = $_POST['Tipo'];
$Email = $_POST['Email'];

    
   

    $query = $conexao->prepare('INSERT INTO Cadastrofunc (  Nome,
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

    $query->bindValue(':Nome', $Nome);
    $query->bindValue(':Sobrenome', $Sobrenome);
    $query->bindValue(':CPF', $CPF);
    $query->bindValue(':Setor', $Setor);
    $query->bindValue(':Tipo', $Tipo);
    $query->bindValue(':Email', $Email);

  
    
    $query->execute();// redireciona para a pagina listafuncionario.php 
header("Location: ./listaFuncionario.php");exit();?>