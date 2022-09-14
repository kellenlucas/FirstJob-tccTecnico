<?php
session_start();
$usuario=$_POST["como"];

$email = $_POST['email'];
$_SESSION['como']=$usuario;
$_SESSION['email']=$email;

if ($usuario==1) {

require("conecta.php");
$verifica= mysqli_query($conexao, "SELECT * FROM candidato");
   
    $verifica = mysqli_query($conexao, "SELECT * FROM candidato WHERE email = '$email'") or die("erro ao selecionar");

    $linha = mysqli_fetch_array($verifica);
    $_SESSION['id']=$linha['id'];
    if ($linha<=0){
         header('location:esquesenha.php?msg=1');
    }else{
      header("Location:emailrec.php");
    }
} 

if ($usuario==2) {

require("conecta.php");

    $verifica = mysqli_query($conexao, "SELECT * FROM empregador WHERE email = '$email'") or die("erro ao selecionar");
    $linha = mysqli_fetch_array($verifica);
      $_SESSION['id']=$linha['id'];
    if ($linha<=2) {       
         header('location:esquesenha.php?msg=1');
  
    }else
      header("Location:emailrec.php");
    }  
     

?>