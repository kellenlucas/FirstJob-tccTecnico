<?php
$usuario=$_POST["como"];

$email = $_POST['email'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

session_start();

$_SESSION['login']= $email;
$_SESSION['senha']= $senha;
$_SESSION['entrar']= $entrar;


if ($usuario==1) {

require("conecta.php");
$verifica= mysqli_query($conexao, "SELECT * FROM candidato");

      /* while ($dados = mysqli_fetch_assoc($verifica)){
        $dados['id'];
      $_SESSION['id']= $dados['id'];
}*/
   
    $verifica = mysqli_query($conexao, "SELECT * FROM candidato WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");

    $linha = mysqli_fetch_array($verifica);
    $_SESSION['id']=$linha['id'];
    if ($linha<=0){
         header('location:logintcc.php?msg=1');
    }else{
      header("Location:pgcandi.php");
    }
} 

if ($usuario==2) {
$email = $_SESSION['login'];
$senha = $_SESSION['senha'];
$entar = $_SESSION['entrar'];

require("conecta.php");

    $verifica = mysqli_query($conexao, "SELECT * FROM empregador WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
    $linha = mysqli_fetch_array($verifica);
      $_SESSION['id']=$linha['id'];
    if ($linha<=2) {       
         header('location:logintcc.php?msg=1');
  
    }else
      header("Location:pgempre.php");
    }  
     

?>