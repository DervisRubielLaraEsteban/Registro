<?php 
include("db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $Telefono = trim($_POST['Telefono']);
        $area_trabajo = trim($_POST['area_trabajo']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO `datos`(`nombre`, `email`, `fecha_reg`, `area_trabajo`, `Telefono`) VALUES ('$name','$email','$fechareg','$area_trabajo','$Telefono')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">Te has registrado correctamente,¡Que tenga un buen dia!</h3>
            <h3 class="ok">¡Que tenga un buen dia!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Algo salió mal!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>