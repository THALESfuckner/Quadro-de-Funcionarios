<?php
$db_host = 'localhost';
$db_name = 'DevWebS';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_senha);


$TarefaID = $_GET['CPF'];
$query = $conexao->prepare('SELECT * FROM Cadastro WHERE CPF = :CPF');
$query ->bindValue(':CPF', $CPF); 
$query ->execute();
$linha = $query->fetch(PDO::FETCH_ASSOC);

$cpf = $linha['CPF'];
$nome = $linha['Nome'];
$sobrenome = $linha['Sobrenome'];
$email = $linha['Email'];
$setor = $setor['Setor'];


?>
<form method="POST" action="atualiza2.php">
<div class="ccad">
            <div class="cadastro"> 
                <h1>Novo Cadastro</h1>   
            <label>CPF:</label> <br>
            <input type="text" name="cpf" placeholder="CPF"> <br>
            <label>Nome:</label> <br>
            <input type="text" name="nome" placeholder="Nome"> <br>
            <label>Sobrenome:</label> <br>
            <input type="text" name="sobrenome" placeholder="Sobrenome"><br>
            <label>Email:</label> <br>
            <input type="text" name="email" placeholder="E-mail"> <br>
         
            <label>Setor</label> <br>
            <select name="setor" id="setores">
                <option value="">Selecione aqui</option>
                <option value="Administrativo">Administrativo</option>
                <option value="Financeiro">Financeiro</option>
                <option value="RH">RH</option>
                <option value="Comercial">Comercial</option>
                <option value="Operacional">Operacional</option>
            </select><br><!-- setor onde trabalha  input type -->
           <!-- <label>Tipo</label> <br>
            <input type="text" name="Tipo" > <br><br> 
            Forma da contratacao  -->
            <input type="submit" value="Enviar">
            </div>
        </div>
</form>