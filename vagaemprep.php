<?php
    session_start();
    if(isset($_SESSION["id"]) ){
            $id = $_SESSION["id"];
    } else {
            header('location:logintcc.html');
    }
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
    .text{

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
  <a href="perfilempre.php">Voltar</a>
 <?php
       

       require("conecta.php");

   $idemp=$_SESSION['id'];

    $verifica= mysqli_query($conexao, "SELECT * FROM vagaemp WHERE idemp ='$idemp' ");

            while ($dados = mysqli_fetch_assoc($verifica)) {
      
            
                ?>
                 <p>
   <span style="font-weight: bold">Area: </span><?php 
  echo $dados['area'];?>
  </p>
  <p>
   <span style="font-weight: bold">Cargo: </span><?php 
  echo $dados['cargo'];?>
  </p>
  <p>
   <span style="font-weight: bold">Salario: </span><?php 
  echo $dados['salario'];?>
  </p>
  <p>
    <span style="font-weight: bold">Requisitos: </span><?php 
  echo $dados['requisitos'];?>
 </p><br>

 <a href="formeditavaga.php">Editar<img src="imagens/editar.png"></a><br><br>

<a  id="i" href="excluivagaemp.php?id=<?php echo $dados['id']; ?>"  onclick="return confirm('Clique em OK para excluir a vaga do sistema');">Excluir<img src="imagens/excluir.png"></a><br>
<?php                
}
?>     

</div>
    </body>
</html>