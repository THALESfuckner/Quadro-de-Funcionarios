<?php
$db_host = 'localhost';
$db_name = 'CadastroFuncionario';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM Cadastro');
$query->execute();?>

<a href="./cadastro.html">Insere Funcionario.</a>
 <table>
    <tr>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>CPF</td>
        <td>Setor</td>
        <td>Tipo</td>
        <td>Email</td>
    </tr> 
    <?php
    while($linha=$query->fetch(PDO::FETCH_ASSOC)){

        echo'   <tr>
                    <td>'.$linha['Nome'].'</td><td>'.$linha['Sobrenome'].'</td>
                    <td>'.$linha['CPF'].'</td><td>'.$linha['Email'].'</td>
                    <td>'.$linha['Setor'].'</td><td>'.$linha['Tipo'].'</td>

                </tr>';}?>
                
 </table>
