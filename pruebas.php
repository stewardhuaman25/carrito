<?php 
include('include/conexion.php');
$consulta ="SELECT * FROM usuario";
$ejecutar = mysqli_query($conexion, $consulta);

while ($respuesta = mysqli_fetch_array($ejecutar)) {
    # code...
    echo $respuesta['dni']."<br>";
    echo $respuesta['apellidos_nombres']."<br>";
    echo $respuesta['correo']."<br>";
    echo $respuesta['telefono']."<br>";
    echo $respuesta['direccion']."<br>";
    echo $respuesta['fecha_nacimento']."<br>";
    echo $respuesta['password']."<br>";
    echo $respuesta['id_rol']."<br>";



    


}

$respuesta



?>