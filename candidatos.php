<!DOCTYPE html>
<html lang="pt-br">

<head>
	  <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
  <script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <link  rel="stylesheet" href="css/csstcc.css"/>
 
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
    <a class="btn-fla " id="bot" href="pgempre.php">Voltar </a>
	 	
	<?php
 $idvaga=$_GET['id'];

 require("conecta.php");

 $verifica= mysqli_query($conexao, "SELECT * FROM `candvaga`, `candidato`, `curriculum` WHERE candvaga.idcandi=candidato.id and curriculum.id=candidato.id and idvaga='$idvaga'");

    while ($dados = mysqli_fetch_assoc($verifica)){
    $dados['idvaga'];
    $dados['idcandi'];
    $idcandi=$dados['idcandi'];    

       $dados['telefone'];
       $dados['bairro'];
       $dados['rua'];
       $dados['numcasa'];
       $dados['complemento'];
       $dados['escolaridade'];
       $dados['forcomplem'];
       $dados['idioma'];

      $dados['nome'];

       ?>
       <br>
       <p>
   <span style="font-weight: bold">Nome: </span><?php 
  echo $dados['nome'];?>
  </p>
  <p>
   <span style="font-weight: bold">Escolaridade: </span><?php 
  echo $dados['escolaridade'];?>
  </p>
 <p>
   <span style="font-weight: bold">Formação complementar: </span><?php 
  echo $dados['forcomplem'];?>
  </p>
  <p>
   <span style="font-weight: bold">Idioma: </span><?php 
  echo $dados['idioma'];?>
  </p>
   <a class="btn waves-effect blue darken-3 black-text" href="perfilcand.php?id=<?php echo $dados['id'];?>">Perfil candidato</a>
   <a class="btn waves-effect blue darken-3 black-text" href="entrevista.php?id=<?php echo $dados['id'];?>">Marcar entrevista</a>
  <?php
 }      

?>
</div>


</body>
</html> 