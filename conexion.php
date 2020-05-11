<?php
//Conectamos con el servidor
$conectar= new mysqli('127.0.0.1','root','root')
or die('No se pudo conectar: '.mysql_error());

//Se verifica la conexion
mysqli_select_db($conectar,"hotelgm")
or die('No se puedo conectar a la base de datos' .mysql_error());
?>