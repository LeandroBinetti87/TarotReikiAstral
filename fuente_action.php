 
<?php
    /*
     * Enable error reporting
     */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	
	$first_name = $_POST['Name']; // no requerido

 
    /*
     * Setup email addresses and change it to your own
     */
	if (1) {
		/*echo("$email_from is a valid email address");*/
	
		$from = "contacto@tarotreikiastral.com.ar";
		$to = "tarotreikiastral@gmail.com";
		$subject = "Fuente de la salud y sanación: " . $first_name;
		$headers = "From:" . $from;
 
		$mensaje = "Nombre: " . $first_name . "\n";
	
		/*
		* Test php mail function to see if it returns "true" or "false"
		* Remember that if mail returns true does not guarantee
		* that you will also receive the email
		*/
		if(mail($to,$subject,$mensaje, $headers))
		{
			echo "<!DOCTYPE html>
				<html>
				<head>
					<meta name='viewport' content='width=device-width, initial-scale=1'>
					<meta charset = 'UTF-8'>
					<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
					<link rel='stylesheet' type='text/css' href='ppp2.css'>
					<title>Tarot Reiki y Astrología</title>
				</head>
				<body>
				<script type='text/javascript' src='jquery-3.4.1.js'></script>
				<script src='parallax.min.js'></script>
				<script src='header.js'></script>
				<div class='infofija'>
					<div class='wrapper'>
						<p class='wrappedtitle2'>Tarot, Reiki y Astrología</p><br><br><br>
						<p>Gracias. Su nombre sera incluido a la brevedad.</p><br><br><br>
						<a href='index.html'>Volver</a><br><br><br>
					</div>
				</div>
				<script src='footer.js'></script>
				<script src='botonFuncion.js'></script>
				</body>
				</html>";
		} 
		else 
		{
			echo "<!DOCTYPE html>
				<html>
				<head>
					<meta name='viewport' content='width=device-width, initial-scale=1'>
					<meta charset = 'UTF-8'>
					<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
					<link rel='stylesheet' type='text/css' href='ppp2.css'>
					<title>Tarot Reiki y Astrología</title>
				</head>
				<body>
				<script type='text/javascript' src='jquery-3.4.1.js'></script>
				<script src='parallax.min.js'></script>
				<script src='header.js'></script>
				<div class='infofija'>
					<div class='wrapper'>
						<p class='wrappedtitle2'>Tarot, Reiki y Astrología</p><br><br><br>
						<p>Hubo un problema con el envío. Por favor inténtelo de nuevo.</p><br><br><br>
						<a href='index.html'>Volver</a><br><br><br>
					</div>
				</div>
				<script src='footer.js'></script>
				<script src='botonFuncion.js'></script>
				</body>
				</html>";
		}
	
	} else {
		$mensaje_error = " no es una dirección válida de mail. Inténtelo de nuevo, por favor. Gracias.";
		$mensaje_error_total = $email_from . $mensaje_error;
		echo($mensaje_error_total);
	} 
?>
<!-- incluye aqui tu propio mensaje de Éxito-->
 
<!--Gracias! Nos pondremos en contacto contigo a la brevedad -->
 
 
<!-- ?php -->
 
<!-- } -->
 
<!-- ? -->