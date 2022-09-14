<?php

// Dados de conexão
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "pemprego";

// Faz a conexão com o banco de dados
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

// Se houver problemas, notifica o usuário
if (mysqli_connect_errno($conexao)) {
  echo "Problemas para conectar no banco. Erro: "; 
  echo mysqli_connect_error();
  die();
}
