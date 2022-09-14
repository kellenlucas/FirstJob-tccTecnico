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
    <script type="text/javascript"> 

      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.timepicker').timepicker();
  });


$(document).ready(function(){ 

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(99) 9999-9999");
$("#cnpj").mask("99.999.999/9999-99");
$("#date").mask("99/99/9999");


})
</script>
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

<form action="entrevistat.php" method="post">
	<p><input type="hidden" name="id" value="<?php echo $idcand;?>"></p>
	<p><span style="font-weight: bold">Escolha a data, o horario e o local da entrevista.</span></p>
<br>
<p>Data: <input name="data" id="date" type="text"></p>

<p>Horario: <input type="text" name="horario" class="timepicker"></p>

<p>Endereço: <input type="text" name="endereco"></p>

<button class="btn waves-effect  blue darken-1 black-text" type="submit" name="action">Enviar convite</button>

</form>