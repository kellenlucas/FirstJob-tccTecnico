<?php

session_start();

unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['idemp']);
unset($_SESSION['nome']);
unset($_SESSION['idvaga']);
unset($_SESSION['idcurri']);
session_destroy();

header('location:logintcc.php');

?>