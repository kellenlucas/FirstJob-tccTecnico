<?php

require("conecta.php");

// Recebe o id do contato
$id = $_GET["id"];

$exclui= mysqli_query($conexao, "DELETE FROM vagaemp WHERE id=".$id);
$e= mysqli_query($conexao, "DELETE FROM candvaga WHERE idvaga=".$id);

header('location:vagaemprep.php');