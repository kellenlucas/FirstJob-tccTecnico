<?php
session_start();
$codigo=$_POST["codigo"];
$_SESSION['como'];
$_SESSION['id'];

$cod=$_SESSION['cod'];
$_SESSION['email']=$email;

if ($codigo==$cod) {
     header("Location:formaltsenha.php");
}else{
	 header('location:confcod.php?msg=1');
}