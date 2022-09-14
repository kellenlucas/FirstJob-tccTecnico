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
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <link  rel="stylesheet" href="css/csstcc.css"/>
<script type="text/javascript">

  $('a[title="Excluir"]').click(function(){
    confirm('Deseja realmente excluir?');
});

    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });

          
</script>
    <meta charset="utf-8">
    <title>Meu primeiro emprego</title>

</head>

<body class=" Thistle darken-2">
    <nav>
        <div class="nav-wrapper blue darken-1 z-depth-3">
    <img src="imagens/tccf.png "><a class="brand-logo"> First Job</a>
        </div>
    </nav>
    <div class="card-panel z-depth-3">
 <?php

        require("conecta.php");

   $email=$_SESSION['login'];

    $verifica= mysqli_query($conexao, "SELECT * FROM empregador WHERE id = '$id'");

            while ($dados = mysqli_fetch_assoc($verifica)) {
      
              
               ?>
                 <p>
   <span style="font-weight: bold">Nome: </span><?php 
  echo $dados['nome'];?>
  </p>
  <p>
   <span style="font-weight: bold">CNPJ: </span><?php 
  echo $dados['cnpj'];?>
  </p>
 <p>
   <span style="font-weight: bold">Email: </span><?php 
  echo $dados['email'];?>
 </p>
 <p>
   <span style="font-weight: bold">Endereço: </span><?php 
  echo $dados['endereco'];?>
 </p>

<a href="formeditaempre.php">Editar<img src="imagens/editar.png"></a><br><br>

<a  id="i" href="excluiempre.php?id=<?php echo $dados['id']; ?>"  onclick="return confirm('Clique em OK para excluir seu perfil.');">Excluir<img src="imagens/excluir.png"></a><br><br>

<a href="vagaemprep.php">Vagas ofertadas</a><br><br>

<a href="pgempre.php">Voltar</a><br><br>

 <?php

}
?>     
</div>
    </body>
</html>