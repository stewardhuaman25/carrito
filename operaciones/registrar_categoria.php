<?php
include("../include/conexion.php");
//recibir la informacion

$nombre=$_POST['categoria'];




$consulta="INSERT INTO categoria (nombre)
VALUES ('$nombre')";

$ejecutar= mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
}


//mostrar la informacion

//echo $dni."<br>";
//echo $ape_nom."<br>";
//echo $correo."<br>";
//echo $telefono."<br>";
//echo $direccion."<br>";
//echo $fecha_naci."<br>";



?>