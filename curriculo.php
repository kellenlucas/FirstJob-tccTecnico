<!DOCTYPE html>
<html lang="pt-br">

<head>
        <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <link  rel="stylesheet" href="css/csstcc.css"/>
      <meta charset="utf-8">
    <title>Meu primeiro emprego</title>

</head>
<body class=" Thistle darken-2">
    <nav>
        <div class="nav-wrapper blue darken-3 z-depth-5">
            <a class="brand-logo center"></a>
        </div>
    </nav>
    <div class="card-panel ">
<?php
session_start();

       require("conecta.php");
        
        $telefone=$_POST['telefone'];
        $bairro=$_POST['bairro'];
        $rua=$_POST['rua'];
        $numcasa=$_POST['numcasa'];
        $complemento=$_POST['complemento'];
        $escolaridade=$_POST['escolaridade'];
        $forcomplem=$_POST['forcomplem'];
        $idioma=$_POST['idioma'];
        $id=$_SESSION['id'];
        $query= mysqli_query($conexao, "INSERT INTO curriculum (telefone, bairro, rua, numcasa, complemento, escolaridade, forcomplem, idioma, id ) VALUES ('$telefone', '$bairro', '$rua', '$numcasa', '$complemento', '$escolaridade', '$forcomplem','$idioma', '$id')");

if($query){
            
         header('location:curriculop.php');
          }else {
         header('location:curriculoo.php?msg=2');  
         echo mysqli_error($conexao);
         }
?>
   
</div>
    
</body>
</html> 