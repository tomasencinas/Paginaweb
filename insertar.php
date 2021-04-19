<?php
include "conexion.php";
$codigo=$_GET["codigo"];
$producto=$_GET["producto"];

$insertar="insert into productos (codigo,nombre) values ($codigo,'$producto')";
$resultado=mysqli_query($conexion,$insertar);

if ($resultado==false) {
	echo "error en la registracion";
}
else{
	echo "registro guardado con exito";
}

?>
