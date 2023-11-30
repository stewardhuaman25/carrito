<?php
include("../include/conexion.php");
//recibir la informacion

$ruc=$_POST['ruc'];
$razon_social=$_POST['razon_social'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$metodo_pago=$_POST['metodo_pago'];



 $consulta="INSERT INTO proveedor(ruc, razon_social,correo,telefono,direccion,metodo_pago)
VALUES('$ruc','$razon_social','$correo','$telefono', '$direccion','$metodo_pago')";

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
