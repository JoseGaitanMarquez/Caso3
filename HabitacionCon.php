<?php
    include "conexion.php";

    //Se recuperan las variables
    $habitacion=$_POST['habitacion'];
    $piso=$_POST['piso'];
    $precio=$_POST['precio'];
    $Des=$_POST['Des'];
    $nombreimg=$_FILES['Foto']['name'];
    $archivo=$_FILES['Foto']['tmp_name'];
    $ruta="image/Habitaciones/".$nombreimg;

    move_uploaded_file($archivo,$ruta);

    //Generamos sentencia de inserccion
    $sql="INSERT INTO habitacion (Numero,Piso,precio,Descripcion,Foto) VALUES('$habitacion','$piso','$precio','$Des','$ruta')";

    //Ejecutamos la sentencia
    $ejecutar=mysqli_query($conectar,$sql) or die('No se puedo conectar a la base de datos' .mysql_error());

    //Validamos el proceso
    echo "<h1>Datos guardatos correctamente</h1>";

    // Cerrar la conexión
    mysqli_close($conectar);
?>
