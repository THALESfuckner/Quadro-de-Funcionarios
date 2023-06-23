<?php
$db_host = 'localhost';
$db_name = 'DevWebS';
$db_user = 'root';
$db_senha = '';

$conexao = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8",$db_user, $db_senha);

$query = $conexao->prepare('SELECT * FROM Cadastro');
$query->execute();?>


<html lang="pt-br">
<head>


    <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="/aviao.png"/>
<title>Informações</title>  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
   
<nav class="menu-lateral">

<div class="btn-expandir">
            <a href="ListaFuncionario.php" class="bi bi-list" id="btn-exp"></a>
          </div>
<ul>
  <li class="item-menu">
    <a href="index.html">
      <span class="icon"><i class="bi bi-house"></i></span>
      <span class="txt-link">Home</span>
    </a>
  </li>

  <li class="item-menu">
    <a href="login.html">
      <span class="icon"><i class="bi bi-person-circle"></i></span>
      <span class="txt-link">Login</span>
    </a>
  </li>

  <li class="item-menu">
    <a href="cadastro.html">
      <span class="icon"><i class="bi bi-plus-circle"></i></span>
      <span class="txt-link">Novo Cadastro</span>
    </a>
  </li>
</ul>
</nav>
<style>/* Estilos para a tabela */
.table-wrapper {
  display:inline-block;
  justify-content: center;
}

table {
  width:90%;
  border-collapse: collapse;
  background-color: #B6CDBD;
  margin-left: 100px;
  margin-right: 30px;
}

table td {
  padding: 8px;
  border: 2px solid #5C715E ;
  color:black;
  
}





</style>



    <div class="content">
        <a class="novo" href="./cadastro.html">Insere Funcionario.</a>
       
 <table>
     <div>
        <tr>
        <td>CPF</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Email</td>
        <td>Setor</td>
        <td></td>
        <td></td>
        
    </tr>
    </div>
</body>
</html>


 
    
    <?php
    while($linha=$query->fetch(PDO::FETCH_ASSOC)){

        echo'   <tr>
                    <td>'.$linha['CPF'].'</td>
                    <td>'.$linha['Nome'].'</td>
                    <td>'.$linha['Sobrenome'].'</td>
                    <td>'.$linha['Email'].'</td>
                    <td>'.$linha['Setor'].'</td>
                    <td><a href="./apagar.php?CPF='.$linha['CPF'].'">Apaga<a/>
                    </td>
                    '.'<td><a href="./atualiza.php?CPF='.$linha['CPF'].'">Atualiza</a></td>

                </tr>';}
    ?>
                
 </table>
</div>
