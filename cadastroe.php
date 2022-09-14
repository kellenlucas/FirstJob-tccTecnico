<?php

 echo '<meta charset="UTF-8">';

      require("conecta.php");
        
        $nome=$_POST['nome'];
        $cnpj=$_POST['cnpj'];
        $email=$_POST['email'];
        $endereco=$_POST['endereco'];
        $senha=$_POST['senha'];
        $confsenha=$_POST['confsenha'];

 if ($confsenha==$senha) {
        $query= mysqli_query($conexao, "INSERT INTO empregador (nome, cnpj, email, endereco, senha ) VALUES ('$nome', '$cnpj', '$email','$endereco','$senha')");

  //var_dump($query); 
 // die;

 if($query){
         header('location:logintcc.php?msg=4');
          }else {
         header('location:cadastroee.php?msg=1');  
         echo mysqli_error($conexao);
         }
     }
 else {
    header('location:cadastroee.php?msg=3');
   } 
