<!DOCTYPE html>
<html lang="pt-br">

<head>
		<script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
	<script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  <link  rel="stylesheet" href="css/csstcc.css"/>

	  <script type="text/javascript">
$(document).ready(function(){ 

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(99) 99999-9999");


})
</script> 

	<meta charset="utf-8">
	<title>Meu primeiro emprego</title>

</head>

<body class=" Thistle darken-2">
	<nav>
		<div class="nav-wrapper blue darken-1 z-depth-3">
    <img src="imagens/tccf.png "><a class="brand-logo black-text"> First Job</a>
		</div>
	</nav>
				<div class="card-panel ">
				<div class="col s6">
					 <a href="pgcandi.php">Voltar</a>
				<br>
				 <?php

                if($_GET){
                    if($_GET['msg'] == 2){
                       echo "<h5 class='errado'> Houveum erro no cadastro. </h5>";
                    
                    }
                }
              
            ?>
				<br>
					<form action="curriculo.php" method="post">

		               <!--COMPLETAR CURRICULO-->
		              <fieldset>
		              <legend>Dados Gerais</legend>

		               <p>Telefone: <input id="telefone" type="text" name="telefone" class="validate" required></p>

		               <p>Bairro: <input type="text" name="bairro" placeholder="Ex: Nova esperaça" required></p>

		               <p>Rua: <input type="text" name="rua" required></p>

		               <p>N°: <input type="text" name="numcasa" placeholder="Número da casa ou apartamento" required></p> 

		               <p>Complemento: <input type="text" name="complemento" placeholder=" Casa ou apartamento" required></p>
		               </fieldset>

		               <fieldset>
		              <legend>Formação</legend> 

                       <p>Escolaridade: <input type="text" name="escolaridade" placeholder="Ex: ensino médio" required></p>

                       <p>Formação complementar: <input type="text" name="forcomplem" placeholder="Ex: Curso técnico em infomática"></p>

                       <p>Idiomas? Se sim quais: <input type="text" name="idioma" ></p>

                       </fieldset>
                        <br>
                        <div class="botao"> 
		                <button class="btn waves-effect  blue darken-1 black-text" type="submit" name="action">Pronto</button>
		                </div>
		              </form>
				</div>
			</div>
	
</body>
</html>	