<?php
session_start();
    if(isset($_SESSION["id"]) ){
    	$idemp=$_SESSION["id"];
    	    } else {
            header('location:logintcc.php');
    }
    $idcand=$_POST['id'];

  require("conecta.php");

        $verifica= mysqli_query($conexao, "SELECT * FROM candidato WHERE id = '$idcand'");

           $dados = mysqli_fetch_assoc($verifica);
            	$nomecad=$dados['nome'];
            	$emailcad=$dados['email'];
            


        $verificac= mysqli_query($conexao, "SELECT * FROM empregador WHERE id = '$idemp'");

            $dadosemp = mysqli_fetch_assoc($verificac);
            $nomeemp=$dadosemp['nome'];

$data=$_POST['data'];
$horario=$_POST['horario'];
$endereco=$_POST['endereco'];


/*// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
include "PHPMailer-master/PHPMailerAutoload.php"; 
 
// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 
 
// Método de envio 
$mail->IsSMTP(); 
 
// Enviar por SMTP 
$mail->Host = "smtp.gmail.com"; 
 
// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 25; 
 
 
// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 
 
// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'firstjob2002@gmail.com'; 
$mail->Password = '123456sete'; 
 
// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 
 
// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2; 
 
// Define o remetente 
// Seu e-mail 
$mail->From = "firstjob2002@gmail.com"; 
 
// Seu nome 
$mail->FromName = "First Job"; 
 
// Define o(s) destinatário(s) 
$mail->AddAddress($emailcad, $nomecad); 
 
// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 
 
// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 
 
// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 
 
// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 
 
// Assunto da mensagem 
$mail->Subject = "First Job - Entrevista de emprego"; 
 
// Corpo do email 

	$mail->Body ="Olá $nomecad:
	A empresa $nomeemp convida voce para uma entrevista no horario $horario e dia $data no endreço $endereco"; 
 

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 
 
// Envia o e-mail 
$enviado = $mail->Send(); 
 
// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "<br> Seu email foi enviado com sucesso! <br>"; 
} else { 
    echo "<br> Houve um erro enviando o email: ".$mail->ErrorInfo; 
}*/
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
    $Mailer->Subject = 'First Job - Entrevista de emprego';
    
    //Corpo da Mensagem
    $Mailer->Body = "Olá $nomecad,
    A empresa $nomeemp convida voce para uma entrevista no horario $horario e dia $data no endreço $endereco";
    
    //Corpo da mensagem em texto
   /* $Mailer->AltBody = 'Olá $nomecad,
    A empresa $nomeemp convida voce para uma entrevista no horario $horario e dia $data no endreço $endereco';*/
    
    //Destinatario 
    $Mailer->AddAddress($emailcad);
    
    if($Mailer->Send()){
        echo "E-mail enviado com sucesso";
    }else{
        echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
    }
