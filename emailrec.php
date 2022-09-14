<?php
session_start();
$_SESSION['como'];
$email=$_SESSION['email'];

$cod=rand ( 00000, 99999 );
$_SESSION['cod']=$cod;

require 'PHPMailer/PHPMailerAutoload.php';
    
    $Mailer = new PHPMailer();
    
    //Define que será usado SMTP
    $Mailer->IsSMTP();

    //$mail->SMTPDebug = 2;

    //$mail->Debugoutput = 'html';
    
    //Enviar e-mail em HTML
    $Mailer->isHTML(true);
    
    //Aceitar carasteres especiais
    $Mailer->Charset = 'UTF-8';
    
    //Configurações
    $Mailer->SMTPAuth = true;
    $Mailer->SMTPSecure = 'tls';
    
    //nome do servidor
    $Mailer->Host = 'smtp.gmail.com';
    //Porta de saida de e-mail 
    $Mailer->Port = 587;
    
    //Dados do e-mail de saida - autenticação
    $Mailer->Username = 'firstjob2002@gmail.com';
    $Mailer->Password = '123456sete';
    
    //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
    $Mailer->From = 'firstjob2002@gmail.com';
    
    //Nome do Remetente
    $Mailer->FromName = 'First Job';
    
    //Assunto da mensagem
    $Mailer->Subject = 'First Job - Redefinir senha';
    
    //Corpo da Mensagem
    $Mailer->Body = "Olá,
    O seu código de recuperação é $cod ";
    
    //Corpo da mensagem em texto
   /* $Mailer->AltBody = 'Olá $nomecad,
    A empresa $nomeemp convida voce para uma entrevista no horario $horario e dia $data no endreço $endereco';*/
    
    //Destinatario 
    $Mailer->AddAddress($email);
    
    if($Mailer->Send()){
        header("Location:confcod.php");
    }else{
        echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
    }
