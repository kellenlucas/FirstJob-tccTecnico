<?php
    session_start();
    if(isset($_SESSION["id"]) ){
            $idcand= $_SESSION["id"];
    } else {
            header('location:logintcc.php');
    }
    $idemp=$_GET['id'];
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
<style type="text/css">
    .text {
      text-align: center;
    } 
    a{
    	margin-left: 5%;
    	margin-right: 5%;
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
    	<div class="text">
 <?php

      require("conecta.php");


    $verifica= mysqli_query($conexao, "SELECT * FROM empregador WHERE id = '$idemp'");

            while ($dados = mysqli_fetch_assoc($verifica)) {
      
                //echo $dados['id']."<br>";
                $dados['nome'];
                $dados['cnpj'];
                $dados['email'];
                //echo $dados['senha']."<br><br>";


?>     
<p>
   <span style="font-weight: bold">Area: </span><?php 
  echo $dados['nome'];?>
  </p>
  <p>
   <span style="font-weight: bold">Cargo: </span><?php 
  echo $dados['cnpj'];?>
  </p>
  <p>
   <span style="font-weight: bold">Salario: </span><?php 
  echo $dados['email'];?>
  </p>
  <br>

 <a href="pgcandi.php">Voltar</a>


  <?php
}
?>
</div>
</div>
    </body>
</html>