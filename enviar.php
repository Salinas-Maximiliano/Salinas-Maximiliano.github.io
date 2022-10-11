<?php
 $name = $_POST['name'];
	$mail = $_POST['mail'];
    $phone = $_POST['phone'];
	$asunto = 'Formulario Rellenado';
	$message = "Nombre: ".$name."<br> Email: $mail<br> Mensaje:".$_POST['mensaje'];
	if(mail('salinas.maximiliano.sebastian@gmail.com', $asunto, $message)){
		echo "Correo enviado";
	}
?>


