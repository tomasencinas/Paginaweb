<!DOCTYPE html>
<html>
<head>
	<title>pagina completa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="widht-device-widht, initial-scale=1.0">
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
<body bgcolor="#F8ABAB" text="black">

<h1>LABORATORIO DE PROGRAMACIÒN II </h1>
<h1> Escribir el codigo con el producto correspondiente se inserta un registro</h1>
	<form action="#" method="GET">
	<font face="Comic Sans MS,arial,verdana">Codigo<label><input type="text" name="codigo"> </label></font>
	<font face="Comic Sans MS,arial,verdana">Producto<label><input type="text" name="producto"> </label></font>
	<input type="submit" value="insertar!!" name="enviando">
	
</form>
<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				if (isset($_GET["enviando"])){
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
				}	
			}
		
?>
</body>
<head>
  <style>
    h2 { color: #0093DE; }
  </style>
</head>
<h2>Actualizar productos </h2>
<form action="#" method="POST">
		<label for="">
			<input type="text" name="buscar1">
		</label>
		<input type="submit" value="buscar!!" name="enviando">

	</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["enviando"] == "buscar!!") {
if (isset($_POST["enviando"])){

}
$busqueda=$_POST["buscar1"]; //trae lo de la caja de texto a la variable


include "conexion.php"; // se conecta a base de datos

$consulta= "SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'"; //consulta SQL


$resultado=mysqli_query($conexion,$consulta);


$i=0;

while (($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC))){//MIENTRAS HAYA REGISTRO
	echo "<form action='actualizar.php' method='GET'>";
	echo "<input type='text' name='codigo' value=$fila[codigo]>";
	echo "<input type='text' name='nombre' value='$fila[nombre]''>";
	echo "<input type='submit' name='actualiza' value='Actualizar'>";
	echo "</form>";
	echo "<br>";
	}

}

 }
?>
<br></br>
 </body>
 <head>
  <style>
    h2 { color:"RED"; }
  </style>
</head>
 <h2> Eliminar productos</h2>
 <form action="#" method="GET">
		<label for="">
			<input type="text" name="buscar2">
		</label>
		<input type="submit" value="buscar!!" name="eliminando">

	</form>
	
<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				if (isset($_GET["eliminando"])){
					$busqueda=$_GET["buscar2"];
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
			}
		
?>


 </body>
 </body>
 <head>
  <style>
    h3 { color:"red"; }
  </style>
</head>
 <h3> Buscar por codigo o nombre </h3>
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