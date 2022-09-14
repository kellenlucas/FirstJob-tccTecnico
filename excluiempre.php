
  <?php

require("conecta.php");

// Recebe o id do contato
$id = $_GET["id"];

$exclui= mysqli_query($conexao, "DELETE FROM empregador WHERE id=".$id);
$ex= mysqli_query($conexao, "DELETE FROM vagaemp WHERE idemp=".$id);
$ver=mysqli_query($conexao, "SELECT * FROM `candvaga` WHERE idemp=".$id);
      $dados = mysqli_fetch_assoc($ver);
       $idvaga=$dados['id'];

$e= mysqli_query($conexao, "DELETE FROM candvaga WHERE idvaga=".$idvaga);
header('location:logintcc.php');
?>
 </body>
</html>