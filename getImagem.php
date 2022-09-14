<?php
	
	$id = $_GET["id"];

	require("conecta.php");
	$result=mysqli_query($conexao, "SELECT * FROM candidato WHERE id=$id") or die("Impossível executar a query ");
	$row=mysqli_fetch_object($result);
	Header( "Content-type: image/gif");
	echo $row->foto;
?>