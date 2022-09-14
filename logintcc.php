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
	<meta charset="utf-8">
	<title>Meu primeiro emprego</title>
</head>


<body class=" Thistle darken-2">
	<nav>
		<div class="nav-wrapper blue darken-1 z-depth-3">
    <img src="imagens/tccf.png "><a class="brand-logo black-text"> First Job</a>
			
			<!--<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="sass.html">Informações</a></li>
		</ul>-->
		</div>
	</nav>
	
	
	
		<div class="card-panel z-depth-3">
			
			
				
				<div class="col s6 ">
					<div class="meio">
                
                <h3>Entrar</h3>
         
				<br>
					<form action="entrar.php" method="post">
	   
                      <p>Entrar como:
                      	<br>
		                	<p>
                              <label>
                               <input class="with-gap" name="como" value="1" type="radio" checked />
                               <span>Candidato</span>
                              </label>
                      
                              <label>
                                <input class="with-gap" name="como" value="2" type="radio" />
                                <span>Empregador</span>
                              </label>
                             </p>
                      </p>
		              <p>Email: <input id="email" name="email" type="email" class="validate" required></p>

		                <p>Senha: <input id="password" name="senha" type="password" maxlength="8" minlength="8" class="validate" required ></p>	

		               <br>
		               <br>
		               <div class="bt">
		               <button class="btn waves-effect  blue darken-1 black-text" type="submit" name="entrar">Entrar </button> <a class="btn-fla" id="bot" href="acadastro.html"> Cadastre-se </a><br><br>
		               <a href='esquesenha.php'>Esqueceu sua senha? </a>
		           </div>
		               <br>
		</form>
		<?php
				 if($_GET){
                    if($_GET['msg'] == 1){
                       echo "<h6 class='errado'>Email e/ou senha incorreto. </h6>";
                    }
                    if($_GET['msg']==3){
                    	echo"<h6>Você alterou sua senha.</h6>";
                    }
                    if($_GET['msg'] == 4){
                        echo "<h5 class='errado'> Cadstro realizado com sucesso. </h5>";
                    
                   }

                }
                ?>
                  

				</div>
			
		
		</div>
	</div>
<footer class="page-footer blue darken-3 z-depth-4">
	<div class="row">
	</div> 
	
	 	©  2020 Kellen Lucas 
	 
	</footer>
</body>
</html>	