<link rel="stylesheet" href="assets/css/main.css" />
<center><img src="images/okey.jpg" alt=""  width="300" height="300"></center>
<b><br><h1 style="text-align:center;color:red;">Por cualquier consulta se contacta al telèfono: 3794-223125</h1></br></b>
<br><button><li><a href="index2.php">volver</a></li></button></br>
<a href="">

<?php

#Salir si alguno de los datos no está presente


#Si todo va bien, se ejecuta esta parte del código...

include_once "conectar.php";


$nombre = $_POST["nombre"];
$apellidos = $_POST["apellido"];
$e_mail = $_POST["e_mail"];
$fechaN = $_POST["fechaN"];
$telefono = $_POST["telefono"];
$comentarios = $_POST["comentarios"];


$sentencia = $mysqli->prepare("INSERT contacto (nombre, apellido, e_mail, fechaN, TELEFONO, comentarios) VALUES(?,?,?,?,?,?)");

$resultado = $sentencia->bind_param("sssdss", $nombre, $apellidos, $e_mail, $fechaN, $telefono, $comentarios); # Pasar en el mismo orden de los ?

$resultado = $sentencia->execute(); # Pasar en el mismo orden de los ?
if($resultado === TRUE) echo "GRACIAS POR COMPLETAR SUS DATOS PERSONALES";
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";


// header ("Location: contacto.html");
?>