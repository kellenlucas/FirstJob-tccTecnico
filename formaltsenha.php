<!DOCTYPE html>
<html lang="pt-br">

<head>
		<script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  <link  rel="stylesheet" href="css/csstcc.css"/>

	  <script type="text/javascript">
$(document).ready(function(){ 

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(999) 9999-9999");


})
</script>
<style type="text/css"> 
    .card-panel{
    	margin-top: 5%;
      margin-left: 35%;
      margin-right: 35%;
      border-radius:7px;
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
		 if($_GET){
                    if($_GET['msg'] == 1){
                       echo "<h6 class='errado'>A senha e o confirmar senha não estão iguais. </h6>";
                    }
                    if($_GET['msg'] == 2){
                       echo "<h6 class='errado'>Não foi possível alterar a senha. </h6>";
                    }
                }
                ?>
	<form action="altsenha.php" method="post">

		 <h6>Digite sua nova senha. </h6><br>
                 
	              <p>Nova senha: <input id="password" name="senha" type="password" class="validate" maxlength="8" minlength="8" required></p>

	              <p>Confirmar senha: <input id="confpassword" name="confsenha" type="password" class="validate" maxlength="8" minlength="8" required></p>

		               <br>
		               <div class="bt">
		               <button class="btn waves-effect  blue darken-1 " type="submit" name="entrar">Salvar </button>
		           </div>
		</form>
		
	</div>