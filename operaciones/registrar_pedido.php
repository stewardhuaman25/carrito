<?php
include("../include/conexion.php");
//recibir la informacion

$fecha_pedido=$_POST['fecha_pedido'];
$fecha_entrega=$_POST['fecha_entrega'];
$metodo_pago=$_POST['metodo_pago'];
$monto=$_POST['monto'];
$comprobante=$_POST['comprobante'];
$estado=$_POST['estado'];







$consulta="INSERT INTO pedidos (id_cliente, fecha_hora_pedido,fecha_entrega,metodo_pago,monto,comprobante,estado)
VALUES (1,'$fecha_pedido','$fecha_entrega','$metodo_pago','$monto', '$comprobante', '$estado')";

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