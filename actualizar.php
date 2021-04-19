<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Registro</title>
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
	<div class="container-fluid">
		<div class="row pt-2">
			<div class="col-12 border pt-2">

			</div>
		</div>

		<div class="row">

		<?php
				include "conexion.php"; // se conecta a base de datos

				$codigo=$_GET["codigo"]; //traigo de la caja de texto de la otra pagina y lo guardo en una variable
				$nombre=$_GET["nombre"];//traigo de la caja de texto de la otra pagina y lo guardo en una variable

				$actualizar="update productos set codigo=$codigo, nombre='$nombre' where codigo=$codigo"; //Eliminacion SQL

				$resultado=mysqli_query($conexion,$actualizar);

				if ($resultado==false){ //Pregunta si no hubo ingreso que me avise y debo revisar
					echo "Error en la registracion";
				}
				else{ //caso contrario ingreso con exito

					echo "Registro actualizado con exito";
			    	echo "<br>";
					echo $codigo;
					echo $nombre;
					echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=pagina_insertar.php">';
				}


		 ?>



</div>

</div>
</body>
</html>