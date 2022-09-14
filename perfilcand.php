<?php
    session_start();
    if(isset($_SESSION["id"]) ){
    } else {
            header('location:logintcc.php');
    }
    $idcand=$_GET['id'];
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
    .foto {
      float: left;
      margin-right:1%;
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

        $verifica= mysqli_query($conexao, "SELECT * FROM candidato WHERE id = '$idcand'");

            while ($dados = mysqli_fetch_assoc($verifica)) {
      
                //echo $dados['id']."<br>";
                 $dados['nome'];
                 $dados['data'];
                 $dados['cpf'];
                 $dados['sexo'];
                 $dados['email'];
 ?>
 <div class="foto">
 <?php               //echo $dados['senha']."<br>";
echo'<img src="imagens/'.$dados['foto'].'" width="150" height="150">';
       ?> 
     </div>

<p>
   <span style="font-weight: bold">Nome: </span><?php 
  echo $dados['nome'];?>
  </p>
  <p>
   <span style="font-weight: bold">Data de nascimento: </span><?php 
  echo $dados['data'];?>
  </p>
  <p>
   <span style="font-weight: bold">Sexo: </span><?php 
  echo $dados['sexo'];?>
  </p>
    <p>
   <span style="font-weight: bold">Email: </span><?php 
  echo $dados['email'];?>
  </p>
  <br>

 <a href="pgempre.php">Voltar</a>


  <?php
   }
   ?>