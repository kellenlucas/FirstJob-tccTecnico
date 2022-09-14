<?php
session_start();

$id= $_SESSION['id'];

    $conexao = mysqli_connect("localhost", "root", "", "pemprego") or die ("erro de conexao");

    // Consulta o BD para obter os dados do contato
    $busca= mysqli_query($conexao, "SELECT * FROM  empregador WHERE id= '$id'");

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
                      echo "<h5 class='certo'> Perfil editado com sucesso! </h5>";
                    }
                   if($_GET['msg'] == 1){
                        echo "<h5 class='errado'> Houve um erro ao editar o perfil. </h5>";
                   }
                }
              
            ?>
            <form action="editaempre.php" method="post">
                
                <h3> Editar Perfil </h3>
                
                <p><input type="hidden" name="id" size="10" value="<?php echo $dados['id']; ?>"></p>
                
                <p>Nome: <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" ></p>
                
                <p>CNPJ: <input id="cnpj" type="text" name="cnpj" class="validate" value="<?php echo $dados['cnpj']; ?>"></p>

               <p>Email: <input id="email" name="email" type="email" class="validate" value="<?php echo $dados['email']; ?>" ></p>

               <p>Senha: <input id="password" name="senha" type="password" maxlength="8" minlength="8" class="validate" value="<?php echo $dados['senha']; ?>" ></p>
                    
                <button class="btn waves-effect  blue darken-1" type="submit" name="action">Salvar</button>
                <a class="btn waves-effect  grey darken-1 " href="perfilempre.php">Voltar</a>
                    
            </form>

        </div>
      
        
    </body>
</html>