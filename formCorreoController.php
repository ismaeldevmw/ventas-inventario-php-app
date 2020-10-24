<?php

require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";

$title="Correo nuevo";
$oSmarty->assign("t","$title");

$oSmarty -> assign("contenido", "formPHPMailer.html.tpl");
$oSmarty -> display("layout.html.tpl");  

if(isset($_POST['envia_correo'])){
require_once dirname(__FILE__)."/libs/phpmailer/class.phpmailer.php";
require_once dirname(__FILE__)."/libs/phpmailer/class.smtp.php";

$para = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
$name = $_FILES['archivo']['name'];
$tmp_name = $_FILES['archivo']['tmp_name'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;

$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host ="smtp.gmail.com";
$mail->Port = 465;
$mail->Username = 'miemail@mail.com';
$mail->Password = 'mipassword';



//datos personales quien es el que lo envia
$mail->From = "emailremitente@mail.com";
$mail->FromName = 'Tienda 24';

//para quien es el email
$mail->Subject = $asunto;
$mail->AddAddress($para);

//cuerpo del mensaje
$mail->Body = $mensaje;
$mail -> AddAttachment ($tmp_name, $name);
$r=$mail->Send();
if($r)
{
    print "<script language='JavaScript'>alert('Mensaje enviado correctamente');</script>"; 
    
}else
    print "<script language='JavaScript'>alert('No se pudo enviar el mensaje $mail->ErrorInfo');</script> ";	
}

?>
