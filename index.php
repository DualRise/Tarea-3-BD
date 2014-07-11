<?php
require_once("class.php");
$tra = new Trabajo();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Prueba página</title>
</head>

<body>
<h1>JIM:</h1>
<form method="POST" action="ValidarLogin.php">
            <p>RUT: <input type="text" name="Rut"></p>
            <p>Contraseña: <input type="password" name="Contrasena"></p>
            <input type="submit" value="Ingresar">
</form>
<form method="GET" action="registro.php">
            <input type="submit" value="Registrar">
</form>

</body>
</html>