<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Registro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">

	<link rel="stylesheet" href="css/css/bootstrap.min.css">
	<script src="js/js/jquery-3.1.1.slim.min.js" ></script>
	<script src="js/js/tether.min.js"></script>
	<script src="js/js/bootstrap.min.js"></script>
  	<script src="js/submenu.js"></script>


	<script src="js/jquery-3.4.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/cssstyle.css">
</head>
<body>
	<form action="#" metodo="GET">
		<label for="">
			<input type="text" name="buscar">
		</label>
		<input type="submit" value="buscale!!" name="eliminando">

	</form>


<?php

if (isset($_GET["enviando"])){

$busqueda=$_GET["buscar"]; //trae lo de la caja de texto a la variable


include "conexion.php"; // se conecta a base de datos

$consulta= "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'"; //consulta SQL


$resultado=mysqli_query($conexion,$consulta);


$i=0;

while (($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))){//MIENTRAS HAYA REGISTRO
	echo "<form action='Eliminar.php' method='GET'>";
	echo "<input type='text' name='codigo' value=$fila[codigo]>";
	echo "<input type='text' name='nombre' value='$fila[nombre]''>";
	echo "<input type='submit' name='elimina' value='Eliminar'>";
	echo "</form>";
	echo "<br>";
	}



 }
?>

 </body>
</html>