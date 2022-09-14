<?php

 require("conecta.php");

//Recebe os dados do formulário
$telefone = $_POST['telefone'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numcasa = $_POST['numcasa'];
$complemento = $_POST['complemento'];
$escolaridade = $_POST['escolaridade'];
$forcomplem = $_POST['forcomplem'];
$idiomas = $_POST['idiomas'];
$id = $_POST['id'];


$edita = mysqli_query($conexao,"UPDATE curriculum SET telefone='$telefone', bairro='$bairro', rua='$rua', numcasa='$numcasa', complemento='$complemento', escolaridade='$escolaridade', forcomplem='$forcomplem', idioma='$idioma' WHERE id = '$id'");

// Verifica o número de linhas afetas pelo último comando
$linhasAfetadas = mysqli_affected_rows($edita);

// Se conseguiu editar...
if($linhasAfetadas > 0){
    header('location:formeditacurriculo.php?msg=1');
} else { // Senão...    
    header('location:formeditacurriculo.php?msg=2');
}