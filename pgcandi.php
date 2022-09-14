<?php
session_start();
if(isset($_SESSION["id"]) ){
  $id = $_SESSION["id"];
} else {
  header('location:logintcc.php');
}
?>
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
      $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
      });
    });

  </script>
  <style type="text/css">
    a {
      color: black;
      margin-left: 2%;
      margin-right: 2%;
    }     
    p {
      font-family: Arial, Helvetica, fantasy;
      padding-top: 1%;
    }

   .carousel .indicators .indicator-item {
    background-color: #90caf9;
}
.carousel .indicators .indicator-item.active {
    background-color: #1e88e5;
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

  <div class="row">

   <div class="col s9">
    <div class="card-panel">
     <div class="carousel carousel-slider"> 
      <?php 
     require("conecta.php");

      $verificacurri= mysqli_query($conexao, "SELECT * FROM curriculum WHERE id = '$id'");

      $dadoscurri = mysqli_fetch_assoc($verificacurri);

      $dadoscurri['telefone'];
      $dadoscurri['bairro'];
      $dadoscurri['rua'];
      $dadoscurri['numcasa'];
      $dadoscurri['complemento'];
      $dadoscurri['escolaridade'];
      $dadoscurri['forcomplem'];
      $dadoscurri['idioma'];

      $verificavaga= mysqli_query($conexao, "SELECT * FROM vagaemp");

      while ($dadosvaga = mysqli_fetch_assoc($verificavaga)){
        $dadosvaga['id'];
        $dadosvaga['idemp'];
        $dadosvaga['area'];
        $dadosvaga['cargo'];
        $dadosvaga['salario'];
        $dadosvaga['requisitos']; 
        ?>
        <div class="carousel-item black-text center">
          <br><br>
          <p>
           <span style="font-weight: bold">Area: </span><?php 
           echo $dadosvaga['area'];?>
         </p>
         <p>
           <span style="font-weight: bold">Cargo: </span><?php 
           echo $dadosvaga['cargo'];?>
         </p>
         <p>
           <span style="font-weight: bold">Salario: </span><?php 
           echo $dadosvaga['salario'];?>
         </p>
         <p>
          <span style="font-weight: bold">Requisitos: </span><?php 
          echo $dadosvaga['requisitos'];?>

        </p> 
        <p>
          <a class="btn waves-effect blue darken-3 black-text" href="candvagaemp.php?id=<?php echo $dadosvaga['id'];?>">Candidatar-se à vaga</a>
          <a class="btn waves-effect blue darken-3 black-text" href="perfilemp.php?id=<?php echo $dadosvaga['idemp'];?>">Perfil empresa</a></p>
          <!--</div>-->
        </div>
        <?php

   /*  if($dadosvaga['cargo']=$dadoscurri['forcomplem']and $dadosvaga['requisitos']=$dadoscurri['escolaridade'] and $dadosvaga['requisitos']=$dadoscurri['idioma']){
      echo"1º Vaga"."<br><br>";
      
       echo $dadosvaga['area']."<br><br>";
                echo $dadosvaga['cargo']."<br><br>";
                echo $dadosvaga['salario']."<br><br>";
                echo $dadosvaga['requisitos']."<br><br>";
      echo"Se gostou marque um horario<br>";
      
   } 
   if($dadosvaga['requisitos']=$dadoscurri['escolaridade'] and $dadosvaga['requisitos']=$dadoscurri['idioma']){
      echo"2º Vaga"."<br><br>";
      
       echo $dadosvaga['area']."<br><br>";
                echo $dadosvaga['cargo']."<br><br>";
                echo $dadosvaga['salario']."<br><br>";
                echo $dadosvaga['requisitos']."<br><br>";
      echo"Se gostou marque um horario<br>";
      
   }
    if($dadosvaga['requisitos']=$dadoscurri['escolaridade']){
      echo"3º Vaga"."<br><br>";
      
       echo $dadosvaga['area']."<br><br>";
                echo $dadosvaga['cargo']."<br><br>";
                echo $dadosvaga['salario']."<br><br>";
                echo $dadosvaga['requisitos']."<br><br>";
      echo"Se gostou marque um horario<br>";
      
    }*/
  }
  ?>
</div>
</div>
</div>
<div class="col s3">
  <div class="card-panel">
   <br>
   <br>
   <i class="material-icons">account_circle</i> <a class="btn-fla" id="bot" href="perfilcandi.php">Perfil</a>
   <br>
   <br>
   <i class="material-icons">library_books</i> <a class="btn-fla " id="bot" href="curriculoo.php">Currículo</a>
   <br>
   <br>
   <a class="btn-fla "id="bot" href="sair.php"> Sair </a>
   <br>
   <br>
   <br>
   <br>
 </div>  
</div>

</div>
</body>
</html>	