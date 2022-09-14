<?php
session_start();
 require("conecta.php");

//Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$edita = mysqli_query($conexao,"UPDATE empregador SET nome='$nome', cnpj='$cnpj', email='$email', senha='$senha' WHERE id = '$id'");

$_SESSION['nome']=$nome;

// Verifica o número de linhas afetas pelo último comando
$linhasAfetadas = mysqli_affected_rows($edita);

// Se conseguiu editar...
if($linhasAfetadas > 0){
    header('location:formeditaempre.php?msg=1');
} else { // Senão...    
    header('location:formeditaempre.php?msg=2');
}