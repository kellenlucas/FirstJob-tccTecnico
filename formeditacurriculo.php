<?php
session_start();

$id= $_SESSION['id'];

    $conexao = mysqli_connect("localhost", "root", "", "pemprego") or die ("erro de conexao");

    // Consulta o BD para obter os dados do contato
    $busca= mysqli_query($conexao, "SELECT * FROM  curriculum WHERE id= '$id'");

  // Cria um array com os dados recebidos
    $dados = mysqli_fetch_assoc($busca);

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
$(document).ready(function(){ 

$('#cpf').mask('999.999.999-99');
$('#cep').mask('99999-999');
$("#telefone").mask("(99) 9999-9999");
$("#cnpj").mask("99.999.999/9999-99");


})
</script>

    <meta charset="utf-8">
    <title>Meu primeiro emprego</title>
    </head>
    <body>
<div class="card-panel z-depth-3">
   <?php

                if($_GET){
                    if($_GET['msg'] == 2){
                      echo "<h5 class='certo'> perfil editado com sucesso! </h5>";
                    }
                   if($_GET['msg'] == 1){
                        echo "<h5 class='errado'> Houve um erro ao editar o perfil. </h5>";
                   }
                }
              
            ?>
            <div class="caixa_login centralizado"><a href="perfilcandi.php">Voltar</a></div>
            <form action="editacurriculo.php" method="post">
                
                <h3> Editar Perfil </h3>
                
                <p><input type="hidden" name="id" size="10" value="<?php echo $dados['id']; ?>"></p>
                
                <p>Telefone: <input id="telefone" type="text" name="telefone" class="validate" value="<?php echo $dados['telefone']; ?>" ></p>
                    
                <p>Bairro: <input type="text" name="bairro" value="<?php echo $dados['bairro']; ?>"></p>
                          
                <p>Rua: <input type="text" name="rua" value="<?php echo $dados['rua']; ?>" ></p>

                <p>N°: <input type="text" name="numcasa"  value="<?php echo $dados['numcasa']; ?>" ></p>

               <p>Complemento: <input type="text" name="complemento" value="<?php echo $dados['complemento']; ?>" ></p>

               <p>Escolaridade: <input type="text" name="escolaridade" value="<?php echo $dados['escolaridade']; ?>" ></p>

               <p>Formação complementar: <input type="text" name="forcomplem" value="<?php echo $dados['forcomplem']; ?>" ></p>

               <p>Idiomas? Se sim quais: <input type="text" name="idioma" value="<?php echo $dados['idioma']; ?>" ></p>
                    
                <button class="btn waves-effect  blue darken-3" type="submit" name="action">Salvar</button> 
            </form>
        </div>
    </body>
</html>