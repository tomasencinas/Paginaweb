<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<form action="#" method="POST">
	<br>
	<select name="eleccion">
		<option value="1">CODIGO</option>
		<option value="2">NOMBRE</option>

	</select>
	<label for=""><input type="text" name="buscar"></label>
	<input type="submit" value="buscale!!" name="enviando">


	</form>
	
	<?php 
	include "conexion.php"; // se conecta a base de datos

	if($_SERVER["REQUEST_METHOD"]=="POST"){
	$busqueda= $_POST["buscar"]; //trae lo de la caja de texto a la variable

	if (isset($_POST["eleccion"]))
	 {
		$eleccion=$_POST["eleccion"];

	if ($eleccion==1) {
		$consulta= "SELECT * FROM productos WHERE CODIGO LIKE '%$busqueda%'"; //consulta SQL
		}
	
	else{
		$consulta= "SELECT * FROM productos WHERE NOMBRE LIKE '%$busqueda%'"; //consulta SQL
		}
	}


$resultado= mysqli_query($conexion,$consulta);
$i=0;

while (($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC))){//MIENTRAS HAYA REGISTRO
	foreach($fila as $valores){

		echo $valores." ";// espacio lateral
	}

	$i++; //incrementa en uno la variable y baja a la siguiente fila o registro
	echo "<br>";//espacio para separar los registros uno abajo del otro
}

}

 ?>

</body>
</html>
