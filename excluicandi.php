<?php

require("conecta.php");

// Recebe o id do contato
$id = $_GET["id"];

$exclui= mysqli_query($conexao, "DELETE FROM candidato WHERE id=".$id);
$ex= mysqli_query($conexao, "DELETE FROM curriculum WHERE id=".$id);

header('location:logintcc.php');
 