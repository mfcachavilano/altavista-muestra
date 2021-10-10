<?php 

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$email = $_POST["email"];
		$tel = $_POST["tel"];
		$mensaje = $_POST["mensaje"];

		$para = "info@opticasaltavista.com.ar";
		$asunto = "Consulta desde opticasaltavista.com.ar";

		$contenido = "
		Nombre: ".$nombre."
		Apellido: ".$apellido."
		E-mail: ".$email."
		Telefono: ".$tel."
		Mensaje: ".$mensaje."

		";

		mail($para,$asunto,utf8_decode($contenido));

		echo ' <script>alert("Mensaje enviado con exito")</script> ';

		echo "<SCRIPT>window.location='contacto.html';</SCRIPT>"; //cambiar la pagina a la que se redirecciona por un "mensaje enviado. html o algo asi"
?>