<!DOCTYPE html>
<html lang="pt-br">

<head>
        <script type="text/javascript" src="jquery/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="jquery/jquery.mask.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <link  rel="stylesheet" href="css/csstcc.css"/>
      <meta charset="utf-8">
    <title>Meu primeiro emprego</title>

</head>
<body class=" Thistle darken-2">
    <nav>
        <div class="nav-wrapper blue darken-3 z-depth-5">
            <a class="brand-logo center"></a>
        </div>
    </nav>
    <div class="card-panel ">
        <?php
session_start();
 echo '<meta charset="UTF-8">';

      require("conecta.php");
        
        $area=$_POST['area'];
        $cargo=$_POST['cargo'];
        $salario=$_POST['salario'];
        $requisitos=$_POST['requisitos'];
        $idemp=$_SESSION['id'];

        $query= mysqli_query($conexao, "INSERT INTO vagaemp (area, cargo, salario, requisitos, idemp) VALUES ('$area', '$cargo', '$salario', '$requisitos', '$idemp')");


if($query){
            
         header('location:pgempre.php?msg=1');
          }else {
         header('location:pgempre.php?msg=2');  
         echo mysqli_error($conexao);
         }
?>
</div>
    
</body>
</html> 