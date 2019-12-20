<?php
/*Datos de conexion a la base de datos*/
$db_host = "localhost";
$db_user = "root";
$db_pass = "Kpodev;2020";
$db_name = "test_empleados";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	die('No se pudo conectar a la base de datos : '.mysqli_connect_error());
}
?>