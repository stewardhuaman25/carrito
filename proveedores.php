<?php
include("include/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores</title>
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php 
    // Lenguaje en php
    include("include/menu.php");

    ?>

    <!-- INICIO DE CONTENIDO -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <?php include("include/modal_frm_reg_proveedores.php"); ?>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead >
                                            <th>Nro</th>
                                            <th>id</th>
                                            <th>ruc_dni</th>
                                            <th>razon social</th>
                                            <th>telefono</th>
                                            <th>correo</th>
                                            <th>direccion</th>
                                            <th>metodo</th>
                                            <th>acciones</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                           
                                            $consulta = "SELECT * FROM proveedor";
                                            $ejecutarr = mysqli_query($conexion, $consulta);
                                            $contador=0;
                                           
                                            while ($respuesta=mysqli_fetch_array($ejecutarr)) {
                                                $contador += 1;
                                                echo "<tr>";
                                                echo "<td>".$contador."</td>";
                                                echo "<td>".$respuesta['id']."</td>";
                                                echo "<td>".$respuesta['ruc']."</td>";
                                                echo "<td>".$respuesta['razon_social']."</td>";
                                                echo "<td>".$respuesta['telefono']."</td>";
                                                echo "<td>".$respuesta['correo']."</td>";
                                               
                                                echo "<td>".$respuesta['direccion']."</td>";
                                                echo "<td>".$respuesta['metodo_pago']."</td>";
                                                
                                               
                                                echo "<td><button class='btn btn-success'>Editar</button> <button class='btn btn-danger'>Eliminar</button></td>";
  
                                                echo "</tr>";
                                            }

                                        ?>
                                    </tbody>
                                </table>

                        
                        <div class="card">
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- FIN DE CONTENIDO -->


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>