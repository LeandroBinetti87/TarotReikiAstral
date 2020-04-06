 
 <?php
if ( function_exists( 'mail' ) )
{
    //echo 'mail() is available'
}
else
{
    //echo 'mail() has been disabled';
}
?>

<?php
    /*
     * Enable error reporting
     */
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
	
	$first_name = $_POST['Name']; // no requerido
 
    $email_from = $_POST['Email']; // requerido
	
	$telephone = $_POST['Telefono']; // no requerido 
 
    $subject_query = $_POST['Subject']; // no requerido
	
    $message = $_POST['Comment']; // no requerido
 
    $error_message = "Error";
 
    /*
     * Setup email addresses and change it to your own
     */
	if (filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
		/*echo("$email_from is a valid email address");*/
	
		$from = "contacto@tarotreikiastral.com.ar";
		$to = "tarotreikiastral@gmail.com";
		$subject = "Consulta de: " . $first_name;
		$headers = "From:" . $from;
 
		$mensaje = "Mail de: " . $first_name . "\n" .
		"Asunto: " . $subject_query . "\n" . "Telefono: " . $telephone . "\n" . "Mail: " . $email_from . "\n" . "Mensaje: " . "\n" . $message;
	
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
						<p>Gracias. Su consulta será respondida a la brevedad.</p><br><br><br>
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
						<p class='wrappedtitle2'>Tarot, Reiki y Astrología</p><br><br><br><br>
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
		$mensaje_error = "<!DOCTYPE html>
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
						<p class='wrappedtitle2'>Tarot, Reiki y Astrología</p><br><br><br><br>
						<p>No es una dirección válida de mail. Inténtelo de nuevo, por favor. Gracias.</p><br><br><br>
						<a href='index.html'>Volver</a><br><br><br>
					</div>
				</div>
				<script src='footer.js'></script>
				<script src='botonFuncion.js'></script>
				</body>
				</html>";
		$mensaje_error_total = $email_from . $mensaje_error;
		echo($mensaje_error_total);
	} 
?>
<!-- incluye aqui tu propio mensaje de Éxito-->
 
<!--Gracias! Nos pondremos en contacto contigo a la brevedad -->
 
 
<!-- ?php -->
 
<!-- } -->
 
<!-- ? -->