<?php
include("../include/conexion.php");

//Recibir la informacion
$dni= $_POST['dni'];
$ap_nom= $_POST['apellidos_nombres'];
$correo= $_POST['correo'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$fecha_nac= $_POST['fecha_nacimiento'];


$consulta = "INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, direccion, fecha_nacimiento, password, activo, 
reset_password, tokan_password) VALUES('$dni','$ap_nom','$correo','$telefono','$direccion','$fecha_nac','$dni',1,0,'')";

$ejecutar = mysqli_query($conexion, $consulta);

 if ($ejecutar) {
    echo "Registro Exitoso";
 }else {
    echo "Error en el Registro";
 }

?>