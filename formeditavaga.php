<?php
session_start();

$id=$_GET["id"];

    $conexao = mysqli_connect("localhost", "root", "", "pemprego") or die ("erro de conexao");

    // Consulta o BD para obter os dados do contato
    $busca= mysqli_query($conexao, "SELECT * FROM vagaemp WHERE id =".$id );

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
            <hr>
              <div class="card-panel z-depth-3">    
            
            <?php

               if(isset($_GET['msg'])){
                    if($_GET['msg'] == 2){
                      echo "<h5 class='certo'> perfil editado com sucesso! </h5>";
                    }
                   if($_GET['msg'] == 1){
                        echo "<h5 class='errado'> Houve um erro ao editar o perfil. </h5>";
                   }
                }
              
            ?>
            <form action="editavaga.php" method="post">
                
                <h3> Editar vaga de emprego </h3>
                
                <p><input type="hidden" name="id" value="<?php echo $dados['id']; ?>"></p>
                
                <p>Area: <input id="area" type="text" name="area" value="<?php echo $dados['area']; ?>" ></p>
                
                 <p>Cargo: <input type="text" name="cargo" value="<?php echo $dados['cargo']; ?>"></p>

               <p>Salario: <input type="text" name="salario" value="<?php echo $dados['salario']; ?>" ></p>

               <p>Requisitos: <input type="text" name="requisitos"value="<?php echo $dados['requisitos']; ?>" ></p>
                    
                <button class="btn waves-effect  blue darken-3" type="submit" name="action">Salvar</button>
                    
            </form>

        </div> 
        
        <div class="caixa_login centralizado"><a href="vagaemprep.php">Voltar</a></div>
    </body>
</html>