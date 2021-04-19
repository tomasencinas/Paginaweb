<?php

// datos de conexion con mysql
$server = 'localhost';
$user = 'root';
$pass = '';
$db ='contacto';

// conecto con la base de datos
$mysqli = new mysqli($server, $user,$pass,$db);

// mostrar errores (eliminar esta linea si esta en un sitio en produccion)
mysqli_report(MYSQLI_REPORT_ERROR);

?>