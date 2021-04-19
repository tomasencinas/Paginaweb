<!DOCTYPE html>
<html>
<head>
	<title class="header">Contacto</title>
	<meta charset="utf-8">
</head>
<body>

<h1 class="header">Contacto </h1>
 <form method="post" action="guardarDatosEditados.php">
 <label>Nombre</label><input required type="text" name="nombre"><br>
 <label>Apellido</label><input required type="text" name="apellido"><br>
 <label>Fecha de Nacimiento</label><input required type="text" name="fechaN" ><br>

 <label>E-mail</label><input required type="text" name="e_mail"><br>
 <label>Telefono</label><input required type="text" name="telefono"><br>
 
<label>Comentarios</label><br>
<textarea name="comentarios">
	
</textarea><br>
<input type="submit" name="" value="Enviar"><br>
 	
 </form>
</body>
</html>