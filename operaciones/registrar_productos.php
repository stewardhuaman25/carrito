<?php
include("../include/conexion.php");
//recibir la informacion

$codigo=$_POST['codigo'];
$descripcion=$_POST['descripcion'];
$detalle=$_POST['detalle'];
$id_categoria=['categoria'];
$precio_compra=$_POST['precio_compra'];
$precio_venta=$_POST['precio_venta'];
$stock=$_POST['stock'];
$estado=$_POST['estado'];
$id_proveedor=['proveedor'];




$nombre_archivo = $codigo.".jpg";
$ruta_foto= "../img_usuarios/".$nombre_archivo;


if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta_foto)) {
    $consulta="INSERT INTO producto(codigo,descripcion, detalle, id_categoria, precio_compra, precio_venta,stock,estado,imagen,id_proveedor)
VALUES ('$codigo','$descripcion','$detalle','$id_categoria','$precio_compra','$precio_venta','$stock','$estado','$nombre_archivo','$id_proveedor')";

$ejecutar= mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
} 
}else {
    echo "error al subir la foto";
}


?>