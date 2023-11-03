<?php
include("../include/conexion.php");
//recibir la informacion

$dni=$_POST['dni'];
$razon_social=$_POST['razon_social'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$direccio_envio=$_POST['direccion_envio'];




    $consulta="INSERT INTO cliente(ruc_dni, razon_social,telefono, correo, direccion, direccion_envio)
VALUES ('$dni','$razon_social','$telefono','$correo', '$direccion', '$direccio_envio')";

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