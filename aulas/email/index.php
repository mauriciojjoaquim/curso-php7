<?php 
// Carregar o autoloader do composer
require_once("vendor/autoload.php");
// Importar as classes 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Instância da classe
$mail = new PHPMailer(true);
try {
    // Configurações do servidor
    $mail->isSMTP();        //Devine o uso de SMTP no envio
    $mail->SMTPAuth = true; //Habilita a autenticação SMTP
    $mail->Username   = 'ghfghfgh@gmail.com';
    $mail->Password   = 'hfghfghfg';
    // Criptografia do envio SSL também é aceito
    $mail->SMTPSecure = 'tls';
    // Informações específicadas pelo Google
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    // Define o remetente
    $mail->setFrom('hfhgfgh@gmail.com', 'hfghfghc');
    // Define o destinatário
    $mail->addAddress('hfhfh@msn.com', 'hfgh');
    // Conteúdo da mensagem
    $mail->isHTML(true);  // Seta o formato do e-mail para aceitar conteúdo HTML
    $mail->Subject = 'Teste de email';
    $mail->Body    = 'Este é o corpo da mensagem <b>Olá em negrito!</b>';
    $mail->AltBody = 'Este é o cortpo da mensagem para clientes de e-mail que não reconhecem HTML';
    // Enviar
$mail->send();
    echo 'A mensagem foi enviada!';
} catch (Exception $e) {
    
    echo "Message could not be sent. Mailer Error:" .$mail->ErrorInfo;
}

?>
