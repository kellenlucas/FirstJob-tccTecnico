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

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(999) 9999-9999");


})
</script>
<style type="text/css">
    .meio{
      
      padding-top: 4%;
    }
    a {
      color: black; 
    }
  </style>

</head>
<body class=" Thistle darken-2">

	<nav>
		<div class="nav-wrapper blue darken-1 z-depth-3">
    <img src="imagens/tccf.png "><a class="brand-logo black-text"> First Job</a>
		</div>
	</nav>
	 
    <div class="row">

     <div class="col s9 ">
        <?php

                if($_GET){
                    if($_GET['msg'] == 2){
                       echo "<h5 class='errado'> Houveum erro no cadastro da vaga. </h5>";
                    
                    }
                   if($_GET['msg'] == 1){
                        echo "<h5 class='errado'> Cadstro da vaga realizado com sucesso. </h5>";
                    
                   }
                }
              
            ?>
  <?php 
      require("conecta.php");

       $verificavaga= mysqli_query($conexao, "SELECT * FROM vagaemp where idemp='$id'");

       while ($dadosvaga = mysqli_fetch_assoc($verificavaga)){
        $dadosvaga['id'];
        $dadosvaga['idemp'];
        $dadosvaga['area'];
        $dadosvaga['cargo'];
        $dadosvaga['salario'];
        $dadosvaga['requisitos']; 
        $idvaga=$dadosvaga['id'];
      

       /*$verificaca= mysqli_query($conexao, "SELECT * FROM candvaga where idvaga='$idvaga'");

       $dadosca = mysqli_fetch_assoc($verificavaga);
       $idcandi=$dadosca['idcandi'];
        $dadosca['idvaga'];

         echo $dadosca['idcandi']."<br>";
         echo $dadosca['idvaga']."<br>";

        $verificacurri= mysqli_query($conexao, "SELECT * FROM curriculum WHERE id = '$idcandi'");

       $dadoscurri = mysqli_fetch_assoc($verificacurri);

       $dadoscurri['telefone'];
       $dadoscurri['bairro'];
       $dadoscurri['rua'];
       $dadoscurri['numcasa'];
       $dadoscurri['complemento'];
       $dadoscurri['escolaridade'];
       $dadoscurri['forcomplem'];
       $dadoscurri['idioma'];

        echo $dadoscurri['telefone']."<br>";
        echo $dadoscurri['bairro']."<br>";
        echo $dadoscurri['rua']."<br>";
        echo $dadoscurri['numcasa']."<br>";
        echo $dadoscurri['complemento']."<br>";
        echo $dadoscurri['escolaridade']."<br>";
        echo $dadoscurri['forcomplem']."<br>";
        echo $dadoscurri['idioma']."<br>";
         
        */?>
        <div class="col s6">
        <div class="meio"> 
          <div class="card">
             <div class="card-content black-text">
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
  <br>

   <a class="btn waves-effect blue darken-3 black-text" href="candidatos.php?id=<?php echo $dadosvaga['id'];?>">Ver candidatos a vaga</a>

</div>
</div>
</div>
</div>
<?php
}
?>
   </div>


      <div class="col s3 z-depth-3">
      	<br>
      	<br>
      	<br>
      	<br>

      <i class="material-icons">account_circle</i> <a class="btn-fla" id="bot" href="perfilempre.php">Perfil </a>
      <br>
      <br>
      <i class="material-icons">library_books</i> <a class="btn-fla " id="bot" href="vagaempree.php">Vaga de emprego </a>
        <br>
      	<br>
      	<a class="btn-fla "id="bot" href="sair.php"> Sair </a>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
        
      </div>

    </div>
</body>
</html>	
</body>
</html>	