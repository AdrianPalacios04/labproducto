<?php
$usuario=$_POST['username'];
$clave=$_POST['password'];
$conexion=mysqli_connect("us-cdbr-iron-east-02.cleardb.net","b812b591f5970a","a687c80f","heroku_0315b3cd250f4ef");
$consulta="select * from usuario where login='$usuario' and clave='$clave'";//seleccion que debe ser verdadera 
$resultado=mysqli_query($conexion,$consulta);//ejecuta 
$fila=mysqli_num_rows($resultado);
if ($fila > 0 ) {  //si consigue un dato
	header("location:productos.php");
}else{
	header("location:index.php");
}
?>