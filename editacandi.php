<?php

 require("conecta.php");

//Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if ( isset( $_FILES[ "foto"] ) ){
$target_dir = "imagens/";
          // $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$imageFileType = strtolower(pathinfo($target_dir . basename($_FILES["foto"]["name"]),PATHINFO_EXTENSION));
$uploadOk = 1;
 $nomeFinal = time().".".$imageFileType;
          $target_file = $target_dir .$nomeFinal;
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    //header('location:formeditacandi.php?msg=8');
     echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  //header('location:formeditacandi.php?msg=7');
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["foto"]["size"] > 5000000) {
  //header('location:formeditacandi.php?msg=6');
   echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
 //header('location:formeditacandi.php?msg=5');
echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  // header('location:formeditacandi.php?msg=4');
   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $nomeFinal = time().".".$imageFileType;
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
  } else {
    // header('location:formeditacandi.php?msg=3');
      echo "Sorry, there was an error uploading your file.";
  }
}

$foto=$nomeFinal;

$edita = mysqli_query($conexao,"UPDATE candidato SET nome='$nome', data='$data', cpf='$cpf', sexo='$sexo', email='$email', senha='$senha', foto='$foto' WHERE id = '$id'");
// Verifica o número de linhas afetas pelo último comando
$linhasAfetadas = mysqli_affected_rows($edita);
// Se conseguiu editar...
if($linhasAfetadas > 0){
    header('location:formeditacandi.php?msg=1');
} else { // Senão...    
    header('location:formeditacandi.php?msg=2');
}

}else{
$edita = mysqli_query($conexao,"UPDATE candidato SET nome='$nome', data='$data', cpf='$cpf', sexo='$sexo', email='$email', senha='$senha' WHERE id = '$id'");

// Verifica o número de linhas afetas pelo último comando
$linhasAfetadas = mysqli_affected_rows($edita);

// Se conseguiu editar...
if($linhasAfetadas > 0){
    header('location:formeditacandi.php?msg=1');
} else { // Senão...    
    header('location:formeditacandi.php?msg=2');
}
}
