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
$("#telefone").mask("(99) 9999-9999");
$("#cnpj").mask("99.999.999/9999-99");
$("#date").mask("99/99/9999");


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
					
				<br>
				 <?php

                if($_GET){
                    if($_GET['msg'] == 2){
                       echo "<h5 class='errado'> Houveum erro no cadastro. </h5>";
                    
                    }
                    if($_GET['msg'] == 3){
                        echo "<h5 class='errado'> As senhas não são iguais. </h5>";
                        
                   }
                }
              
            ?>
            <a href="logintcc.php">Voltar</a>
					<form action="cadastroc.php" method="post" enctype="multipart/form-data">
		           
		                <p>Nome Completo: <input type="text" name="nome" required></p>

		                <p>Data de nascimento: <input name="data" id="date" type="text"></p>

		                <p>CPF:<input id="cpf" type="text" name="cpf" class="validate" required></p>

		                 <p> Sexo:
		                	<br>
		                	<p>
                              <label>
                               <input class="with-gap" name="sexo" value="Masculino" type="radio" checked />
                               <span>Masculino</span>
                              </label>
                             </p>

                             <p>
                              <label>
                                <input class="with-gap" name="sexo" value="Feminino" type="radio" />
                                <span>Feminino</span>
                              </label>
                             </p>

                        </p>

		                <p>Email: <input id="email" name="email" type="email" class="validate" required></p>

		                <p>Senha: <input id="password" name="senha" type="password" maxlength="8" minlength="8" class="validate" required ></p>

		                <p>Confirmar Senha: <input id="confpassword" name="confsenha" type="password" maxlength="8" minlength="8" class="validate" required ></p>

		                <p>Adicione uma imagem: <input type="file" name="imagem"/></p>

                        
		                <button class="btn waves-effect  blue darken-1 black-text" type="submit" name="action">Pronto</button>
		                
		              </form>
		             
				
		</div>
	</div>
	
</body>
</html>	