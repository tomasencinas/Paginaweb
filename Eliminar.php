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
	<div class="container-fluid">
		<div class="row pt-2">
			<div class="col-12 border pt-2">

			</div>
		</div>

		<div class="row">

		<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET") {
				include "conexion.php"; // se conecta a base de datos
				$codigo=$_GET["codigo"]; //traigo de la caja de texto de la otra pagina y lo guardo en una variable
				$nombre=$_GET["nombre"];//traigo de la caja de texto de la otra pagina y lo guardo en una variable

				$actualizar= "DELETE FROM productos WHERE codigo=$codigo"; //Eliminacion SQL

				$resultado=mysqli_query($conexion,$actualizar);

				if ($resultado==false){ //Pregunta si no hubo ingreso que me avise y debo revisar
					echo '<div class="alert alert-danger alert-dismissible fade show">';
			    	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo "<strong>Error en la Eliminacion!!.</strong>";
					echo "Registro no eliminado.";
				}else{ //caso contrario ingreso con exito

					echo '<div class="alert alert-success alert-dismissible fade show">';
			    	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					echo "<strong>Eliminación Exitosa!.</strong>Registro Eliminado con exito";
				}
			}else{
				echo "";
			}



		 ?>



</div>

</div>
</body>
</html>