<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellidos"]) || 
	!isset($_POST["e-mail"]) || 
	!isset($_POST["id"])
	!isset($_POST["fechaN"])
	!isset($_POST["TELEFONO"])
	!isset($_POST["comentarios"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "conectar.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$e-mail = $_POST["e-mail"];
$fechaN = $_POST["fechaN"];
$TELEFONO = $_POST["TELEFONO"];
$comentarios = $_POST["comentarios"];



$sentencia = $base_de_datos->prepare("UPDATE contacto SET nombre = ?, apellidos = ?, e-mail = ?,  fechaN = ?  TELEFONO = ?  comentarios = ?WHERE id = ?;");
$resultado = $sentencia->execute([$nombre, $apellidos, $fechaN, $id, $TELEFONO, $comentarios, $e-mail]); # Pasar en el mismo orden de los ?
if($resultado === TRUE) echo "Cambios guardados";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>