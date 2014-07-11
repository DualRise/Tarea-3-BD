<?php
require_once("class.php");
$tra = new Trabajo();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Untitled 9</title>
</head>

<body>
<h1>Listado de Estudiantes Postulantes:</h1>
<?php
$a = $tra->get_postulantes();
?>
<?php
for($i=0;$i<sizeof($a);$i++)
{
?>
<li><a href="?Rut=<?php echo $a[$i]["Rut"];?>" title="<?php echo $a[$i]["Nombre"];?>"><?php echo $a[$i]["Nombre"];?></a></li>
<?php
}
?>
<h2>Datos:</h2>
<?php
for($i=0;$i<sizeof($a);$i++)
{
?>
<li>Rut: <?php echo $a[$i]["Rut"];?></a></li>
<li>Rol: <?php echo $a[$i]["Rol_Usm"];?></a></li>
<li>Carrera: <?php echo $a[$i]["Carrera"];?></a></li>
<li>Correo: <?php echo $a[$i]["Correo"];?></a></li>
<li>Telefono: <?php echo $a[$i]["Telefono"];?></a></li>
<li>Preferencia: <?php echo $a[$i]["Preferencia"];?></a></li>
<li>Area: <?php echo $a[$i]["id_area"];?></a></li>

<?php
}
?>

</body>
</html>