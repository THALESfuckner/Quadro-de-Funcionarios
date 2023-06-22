<?php
$db_host = 'localhost';
$db_name = 'DevWebS';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM Cadastro');
$query->execute();?>

<a href="./cadastro.html">Insere Funcionario.</a>
 <table>
    <tr>
        <td>CPF</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Email</td>
        <td>Setor</td>
        <td></td>
    </tr> 
    <?php
    while($linha=$query->fetch(PDO::FETCH_ASSOC)){

        echo'   <tr>
                    <td>'.$linha['CPF'].'</td>
                    <td>'.$linha['Nome'].'</td>
                    <td>'.$linha['Sobrenome'].'</td>
                    <td>'.$linha['Email'].'</td>
                    <td>'.$linha['Setor'].'</td>

                </tr>';}
    ?>
                
 </table>
