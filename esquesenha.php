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
                       echo "<h6 class='errado'>Esse email não está cadastrado. </h6>";
                    }
                }
                ?>
			<a href='logintcc.php'>Voltar</a>
	<form action="esquesenha2.php" method="post">

		 <h6>Informe  seu dados para começar o processo de redefinição de senha.</h6><br>
		 <p>Você é:
                      	<br>
		                	<p>
                              <label>
                               <input class="with-gap blue darken-1" name="como" value="1" type="radio" checked />
                               <span>Candidato</span>
                              </label>
                      
                              <label>
                                <input class="with-gap" name="como" value="2" type="radio" />
                                <span>Empregador</span>
                              </label>
                             </p>
                      </p>
	   
 
		              <p>Email: <input id="email" name="email" type="email" class="validate" required></p>

		               <br>
		               <br>
		               <div class="bt">
		               <button class="btn waves-effect  blue darken-1 " type="submit" name="entrar">Começar </button>
		           </div>
		</form>
		
	</div>
