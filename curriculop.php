<!DOCTYPE html>
<html lang="pt-br">

<head>
        <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <link  rel="stylesheet" href="css/csstcc.css"/>
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
        session_start();

         require("conecta.php");

   $id=$_SESSION['id'];

    $verifica= mysqli_query($conexao, "SELECT * FROM curriculum WHERE id = '$id'");

            while ($dados = mysqli_fetch_assoc($verifica)) {
      
        
?>
                 <p>
   <span style="font-weight: bold">Telefone: </span><?php 
  echo $dados['telefone'];?>
  </p>
  <p>
   <span style="font-weight: bold">Bairro: </span><?php 
  echo $dados['bairro'];?>
  </p>
  <p>
   <span style="font-weight: bold">Rua: </span><?php 
  echo $dados['rua'];?>
  </p>
  <p>
    <span style="font-weight: bold">N° : </span><?php 
  echo $dados['numcasa'];?>
 </p>
   <span style="font-weight: bold">Complemento: </span><?php 
  echo $dados['complemento'];?>
 </p>
  <p>
   <span style="font-weight: bold">Escolaridade: </span><?php 
  echo $dados['escolaridade'];?>
  </p>
  <p>
   <span style="font-weight: bold">Formação complementar : </span><?php 
  echo $dados['forcomplem'];?>
  </p>
  <p>
   <span style="font-weight: bold">Idioma: </span><?php 
  echo $dados['idioma'];?>
  </p><br>

  <a href="formeditacurriculo.php">Editar<img src="imagens/editar.png"></a><br><br>

<a  id="i" href="excluicurriculo.php?id=<?php echo $dados['id']; ?>"  onclick="return confirm('Clique em OK para excluir o currículo');">Excluir<img src="imagens/excluir.png"></a><br>

 <?php
}
?>     

</div>
<a href="pgcandi.php">'Voltar</a>
    </body>
</html>