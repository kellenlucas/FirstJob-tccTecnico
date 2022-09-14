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
$(document).ready(function(){ 

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(99) 99999-9999");


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
                <div class="card-panel ">
                <div class="col s6">
                    
                <br>
                <a href="pgempre.php">Voltar</a>
                    <form action="vagaempre.php" method="post">

                       <!--COMPLETAR CURRICULO-->

                       <p>Area: <input id="area" type="text" name="area" ></p>

                       <p>Cargo: <input type="text" name="cargo" ></p>

                       <p>Salario: <input type="text" name="salario"></p>

                       <p>Requisitos: <input type="text" name="requisitos"></p> 

                        <div class="botao"> 
                        <button class="btn waves-effect  blue darken-1 black-text" type="submit" name="action">Pronto</button>
                        </div>
                      </form>
                </div>
            </div>
    
</body>
</html> 