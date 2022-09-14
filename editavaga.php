<?php

 require("conecta.php");

//Recebe os dados do formulário
$area = $_POST['area'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$requisitos = $_POST['requisitos'];
$id=$_POST['id'];


$edita = mysqli_query($conexao,"UPDATE vagaemp SET area='$area', cargo='$cargo', salario='$salario', requisitos='$requisitos' WHERE id = '$id'");



// Verifica o número de linhas afetas pelo último comando
$linhasAfetadas = mysqli_affected_rows($edita);

// Se conseguiu editar...
if($linhasAfetadas > 0){
    header('location:formeditavaga.php?msg=1');
} else { // Senão...    
    header('location:formeditavaga.php?msg=2');
}