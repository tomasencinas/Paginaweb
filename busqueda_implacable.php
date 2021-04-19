<?php 

$busqueda=$_POST["buscar"]; //trae lo de la caja de texto a la variable


include "conexion.php"; // se conecta a base de datos

$consulta= "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'"; //consulta SQL



$resultado= mysqli_query($conexion,$consulta);


$i=0;

while (($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC))){//MIENTRAS HAYA REGISTRO
	foreach($fila as $valores){

		echo $valores." ";// espacio lateral
	}

	$i++; //incrementa en uno la variable y baja a la siguiente fila o registro
	echo "<br>";//espacio para separar los registros uno abajo del otro
}

 ?>