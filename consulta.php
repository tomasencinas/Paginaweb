<?php

include "conexion.php"; // trae todo el codigo del archivo conexion


$consulta="select * from productos";

$resultado=mysqli_query($conexion,$consulta);

$i=0;

while (($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC))){//mientras haya registros
	foreach($fila as $valores){ //recorre la matriz mostrando los valores de los registros
		echo $valores." ";
	}

	$i++;
	echo "<br>";
}
?>