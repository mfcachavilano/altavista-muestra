<?php 

		$nombre = $_POST["nombre"];
		$tel = $_POST["tel"];
		$suc = $_POST["suc"];
		$serv = $_POST["serv"];		
		$mensaje = $_POST["mensaje"];

		$para = "info@opticasaltavista.com.ar";
		$asunto = "Solicitud de Turno desde la web";

		$contenido = "
		Nombre y Apellido: ".$nombre."
		Telefono: ".$tel."
		Sucursal seleccionada: ".$suc."
		Servicio seleccionado: ".$serv."
		Especificaciones: ".$mensaje."

		";

		mail($para,$asunto,utf8_decode($contenido));

		echo ' <script>alert("Turno solicitado con exito")</script> ';

		echo "<SCRIPT>window.location='turnos.html';</SCRIPT>"; //cambiar la pagina a la que se redurecciona por un "mensaje enviado. html o algo asi"
?>