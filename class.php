<?php
class conectar
{
    
    public function con()
    {
        $cadena = "host='localhost' port='5432' dbname='JIM-USM' user='postgres' password='dorothtyt'";
        $con= pg_connect ($cadena) or die ('<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="" />

	<title>Prueba página</title>
</head>

<body>Error en la conección</body></html>');
        return $con;
    }
}

class Trabajo extends conectar
{
    private $t;
    private $art;
    public function __construct()
    {
        $this->t = array();
        $this->art = array();
    }
    public function get_postulantes()
    {
        $sql = 'select * from "JIM"."Postulacion";';
        $reg = pg_query(parent::con(),$sql);
        while($reg = pg_fetch_assoc($reg))
        {
            $this->t[]=$reg;
        }
        return $this->t;
    }
}

?>