<?php

require("conecta.php");

// Recebe o id do contato
$id = $_GET["id"];

$exclui= mysqli_query($conexao, "DELETE FROM curriculum WHERE id=".$id);

header('location:perfilcandi.php');