<?php
    session_start();
    if(isset($_SESSION["id"]) ){
            $id = $_SESSION["id"];
    } else {
            header('location:logintcc.php');
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
		<script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  <link  rel="stylesheet" href="css/csstcc.css"/>
    </script>
  <style type="text/css">
    .foto {
      float: left;
      margin-right:1%;
    }
    .text{
        margin-top: -1%;
    } 
       
   
  </style>

	<meta charset="utf-8">
	<title>Meu primeiro emprego</title>

</head>

<body class=" Thistle darken-2">
	<nav>
		<div class="nav-wrapper blue darken-1 z-depth-3">
    <img src="imagens/tccf.png "><a class="brand-logo black-text"> First Job</a>
		</div>
	</nav>
<div class="card-panel z-depth-3">

    	<?php

    	require("conecta.php");

    $verifica= mysqli_query($conexao, "SELECT * FROM candidato WHERE id = '$id'");

            while ($dados = mysqli_fetch_assoc($verifica)) {
?><div class="foto">
<?php
 echo'<img src="imagens/'.$dados['foto'].'" width="150" height="150">';?>
</div>
<?php               /*echo $dados['id']."<br>";
            	echo  $dados['nome']."<br><br>";
            	echo  $dados['data']."<br><br>";
            	echo  $dados['cpf']."<br><br>";
            	echo  $dados['sexo']."<br><br>";
            	echo  $dados['email']."<br><br>";
            	echo $dados['senha']."<br>";*/
   ?>
   <div class="text">
    <p>
   <span style="font-weight: bold">Nome: </span><?php 
  echo $dados['nome'];?>
  </p>
  <p>
   <span style="font-weight: bold">Data de nasc.: </span><?php 
  echo $dados['data'];?>
  </p>
  <p>
   <span style="font-weight: bold">CPF: </span><?php 
  echo $dados['cpf'];?>
  </p>
  <p>
    <span style="font-weight: bold">Sexo: </span><?php 
  echo $dados['sexo'];?>
 </p>
   <span style="font-weight: bold">Email: </span><?php 
  echo $dados['email'];?>
 </p>
</div>
<a href="formeditacandi.php">Editar<img src="imagens/editar.png"></a><br><br>

<a  id="i" href="excluicandi.php?id=<?php echo $dados['id']; ?>"  onclick="return confirm('Clique em OK para excluir seu perfil.');">Excluir<img src="imagens/excluir.png"></a><br><br>

<a href="curriculop.php">Currículo</a><br><br>

<a href="pgcandi.php">Voltar</a><br><br>

  <?php                   
}
?> 
    </body>
</html>