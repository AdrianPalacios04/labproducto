<?php
/*Datos de conexion a la base de datos*/
$db_host = "us-cdbr-iron-east-02.cleardb.net";
$db_user = "b812b591f5970a";
$db_pass = "a687c80f";
$db_name = "heroku_0315b3cd250f4ef";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>