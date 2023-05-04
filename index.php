<!DOCTYPE html>
<html>
    <b><h1>FORMULARIO DE LOS EMPLEADOS</h1></b>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<body background="fondo.jpg">
    <form method="post">
    	<b><h1>REGISTRO</h1></b>
    	<input type="text" name="name" placeholder="Nombre del Usuario">
    	<input type="email" name="email" placeholder="Correo">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registro.php");
        ?>
</body>
</html>