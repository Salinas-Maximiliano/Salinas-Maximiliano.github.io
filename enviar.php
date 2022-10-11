<?php
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $phone = $_POST['phone'];
// $message = $_POST['message'];

// $message = "Este mensaje fue enviado por: " . $name . " \n";
// $message .= "Su e-mail es: " . $mail . " \r\n";
// $message .= "Teléfono de contacto: " . $phone . " \r\n";
// $message .= "Mensaje: " . $_POST['message'] . " \r\n";
// $message .= "Enviado el: " . date('d/m/Y', time());

// $para = 'salinas.maximiliano.sebastian@gmail.com';
// $asunto = 'Mensaje de Porfolio';

// mail($para, $asunto, utf8_decode($message));

// header("Location:index.html");

    $name = $_POST['name'];
	$mail = $_POST['mail'];
    $phone = $_POST['phone'];
	$asunto = 'Formulario Rellenado';
	$message = "Nombre: ".$name."<br> Email: $mail<br> Mensaje:".$_POST['mensaje'];


	if(mail('salinas.maximiliano.sebastian@gmail.com', $asunto, $message)){
		echo "Correo enviado";
	}
?>


