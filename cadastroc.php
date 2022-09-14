 <?php

/* echo '<meta charset="UTF-8">';

       $conexao = mysqli_connect("localhost", "root", "", "pemprego") or die ("erro de conexao");

        
        $nome=$_POST['nome'];
        $data=$_POST['data'];
        $cpf=$_POST['cpf'];
        $sexo=$_POST['sexo'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confsenha=$_POST['confsenha'];
        

 if ($confsenha==$senha) {
/******
 * Upload de imagens
 ******/
 
// verifica se foi enviado um arquivo
/*if ( isset( $_FILES[ 'arquivo' ][ 'name' ] ) && $_FILES[ 'arquivo' ][ 'error' ] == 0 ) {
    echo 'Você enviou o arquivo: <strong>' . $_FILES[ 'arquivo' ][ 'name' ] . '</strong><br />';
    echo 'Este arquivo é do tipo: <strong > ' . $_FILES[ 'arquivo' ][ 'type' ] . ' </strong ><br />';
    echo 'Temporáriamente foi salvo em: <strong>' . $_FILES[ 'arquivo' ][ 'tmp_name' ] . '</strong><br />';
    echo 'Seu tamanho é: <strong>' . $_FILES[ 'arquivo' ][ 'size' ] . '</strong> Bytes<br /><br />';
 
    $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
    $nomef = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
    $extensao = pathinfo ( $nomef, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
    $extensao = strtolower ( $extensao );
 
    // Somente imagens, .jpg;.jpeg;.gif;.png
    // Aqui eu enfileiro as extensões permitidas e separo por ';'
    // Isso serve apenas para eu poder pesquisar dentro desta String
    if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        // Evita nomes com acentos, espaços e caracteres não alfanuméricos
        $novoNome = uniqid ( time () ) . '.' . $extensao;
 
        // Concatena a pasta com o nome
        $destino = 'imagens / ' . $novoNome;
 
        // tenta mover o arquivo para o destino
        if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {

        }else{
            echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
    }
  }
    else{
        echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.gif;*.png"<br />';
}
}
else{
    echo 'Você não enviou nenhum arquivo!';

   }
    $query  = mysqli_query($conexao, "INSERT INTO candidato (nome, data, cpf, sexo, email, senha, foto ) VALUES ('$nome', '$data', '$cpf', '$sexo', '$email','$senha', '$novoNome')");

 //var_dump($query); 
 // die; 
          if($query){
         header('location:cadastrocc.php?msg=1');
          }else {
         header('location:cadastrocc.php?msg=2');  
         echo mysqli_error($conexao);
         }
       }else {
    header('location:cadastrocc.php?msg=3');
   } */

require("conecta.php");

 //$imagem = $_FILES["imagem"];
        $nome=$_POST['nome'];
        $data=$_POST['data'];
        $cpf=$_POST['cpf'];
        $sexo=$_POST['sexo'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $confsenha=$_POST['confsenha'];
         if ($confsenha==$senha) {

          $target_dir = "imagens/";
          // $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
$imageFileType = strtolower(pathinfo($target_dir . basename($_FILES["imagem"]["name"]),PATHINFO_EXTENSION));
$uploadOk = 1;
 $nomeFinal = time().".".$imageFileType;
          $target_file = $target_dir .$nomeFinal;
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["imagem"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["imagem"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  $nomeFinal = time().".".$imageFileType;
  if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["imagem"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
 $query  = mysqli_query($conexao, "INSERT INTO candidato (nome, data, cpf, sexo, email, senha, foto ) VALUES ('$nome', '$data', '$cpf', '$sexo', '$email','$senha', '$nomeFinal')");
if($query){
             unlink($nomeFinal);
         header('location:logintcc.php?msg=4');
          }else {
         header('location:cadastrocc.php?msg=2');  
         echo mysqli_error($conexao);
         }
       }else {
    header('location:cadastrocc.php?msg=3');

  }

/*if($imagem != NULL) {
  $nomeFinal = time().'.jpg';
  if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);

    $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

    $query  = mysqli_query($conexao, "INSERT INTO candidato (nome, data, cpf, sexo, email, senha, foto ) VALUES ('$nome', '$data', '$cpf', '$sexo', '$email','$senha', '$mysqlImg')");

 //var_dump($query); 
 // die; 
          if($query){
             unlink($nomeFinal);
         header('location:cadastrocc.php?msg=1');
          }else {
         header('location:cadastrocc.php?msg=2');  
         echo mysqli_error($conexao);
         }
       }else {
    header('location:cadastrocc.php?msg=3');

  }
}
}*/


?>