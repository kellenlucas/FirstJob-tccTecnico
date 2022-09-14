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
	<?php
session_start();
    
    $idcandi = $_SESSION["id"];
    $idvaga=$_GET['id'];

 require("conecta.php");

    $query  = mysqli_query($conexao, "INSERT INTO candvaga (idcandi, idvaga) VALUES ('$idcandi', '$idvaga')");
                
 if($query){
    echo "<h5> Voce se candidatou a essa vaga. </h5><br>";

} else {
    echo "<h5> Voce não se candidatou a essa vaga. Tente novamente. </h5>";
    
    echo mysqli_error($conexao);
}
?>
 <a class="btn-fla " id="bot" href="pgcandi.php">Voltar </a>
</div>

</body>
</html> 