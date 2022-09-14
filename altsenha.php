<?php
session_start();
$como=$_SESSION['como'];
$email=$_SESSION['email'];
$id=$_SESSION['id'];
 require("conecta.php");

  $senha=$_POST['senha'];
  $confsenha=$_POST['confsenha'];
if ($confsenha==$senha) {
	if ($como==1) {
	$edita= mysqli_query($conexao,"UPDATE candidato SET senha='$senha' WHERE id = '$id'");

	$linhasAfetadas = mysqli_affected_rows($edita);
// Se conseguiu editar...
if($linhasAfetadas >0 ){
    header('location:formaltsenha.php?msg=2');
} else { // Senão...    
   header('location:logintcc.php?msg=3');
}
	}
	if ($como==2) {
		$edita = mysqli_query($conexao,"UPDATE empregador SET senha='$senha' WHERE email = '$email'");
		$linhasAfetadas = mysqli_affected_rows($edita);
// Se conseguiu editar...
if($linhasAfetadas > 0){
       header('location:formaltsenha.php?msg=2');
} else { // Senão...    
     header('location:logintcc.php?msg=3');
	}
}
}
else{
	header('location:formaltsenha.php?msg=1');
}