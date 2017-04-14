<?php
require ('class.phpmailer.php');
require ('class.smtp.php');

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->Host = "www.isatix.org";


$nombre_a = $_POST["name"];

$mail_a = $_POST["email"];


$fono = $_POST["phone"];
$mensaje = $_POST["message"];

$body = "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/> ";
$body .= "<strong>Se ha solicitado información de:</strong> <br>";
$body .= "<br> <br>";
$body .= "Nombre: " . $nombre_a . "<br>";

$body .= "Mail: " . $mail_a . "<br>";
$body .= "Fono: " . $fono . "<br>";
$body .= "Mensaje: " . $mensaje . "<br>";
$body .= "<br> <br>";
$body .= "<strong>Mensaje generado desde www.aguaprana.cl</strong> <br>";


$mail->Subject = $nombre_a." - Formulario contactanos ";
$mail->AddAddress("francisco@isatix.org", "-Agua Prana-");


/* Sustituye  ( CuentaDeEnvio )  por la cuenta desde la que deseas enviar por ejem. prueba@domitienda.com  */

$mail->From = "mail@isatix.org";

$mail->FromName = "Desde aguaprana.cl";

$mail->AltBody = "solicitud";

$mail->MsgHTML($body);

/* Sustituye  (CuentaDestino )  por la cuenta a la que deseas enviar por ejem. admin@domitienda.com  */

$mail->SMTPAuth = true;

/* Sustituye (CuentaDeEnvio )  por la misma cuenta que usaste en la parte superior en este caso  prueba@domitienda.com  y sustituye (ContraseñaDeEnvio)  por la contraseña que tenga dicha cuenta */

$mail->Username = "admin@isatix.org";
$mail->Password = "Admin971";


//if ($mail_a != "") {

//$mail->AddAddress($mail_a, "-correo copia-");
if (!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
}
echo $body;
//}

?>
<link rel="stylesheet" href="../css/960.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="../css/base.css" type="text/css" media="screen"/>

<div class="container_12">
    <div class="quienes" style="width: 960px; height: 1000px;">
        <p style="text-align: center; margin-top: 200px;">Gracias por enviar tú solicitud, responderemos a tu solicitud en las próximas horas.</p>
        <!--        <meta http-equiv="Refresh" content="2;url=../">-->
    </div>
</div>

