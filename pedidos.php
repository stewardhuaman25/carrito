<?php
include("include/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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
                        <?php include("include/modal_frm_reg_pedidos.php"); ?>
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <th>Nro</th>
                                <th>id_cliente</th>
                                <th>fecha_hora_pedido</th>
                                <th>fecha_entrega</th>
                                <th>metodo_pago</th>
                                <th>monto</th>
                                <th>comprobante</th>
                                <th>estado</th>
                                <th>acciones</th>



                            </thead>
                            <tbody>
                                <?php

                                $consulta = "SELECT * FROM pedidos";
                                $ejecutar = mysqli_query($conexion, $consulta);
                                $contador = 0;

                                while ($respuesta = mysqli_fetch_array($ejecutar)) {
                                    $contador += 1;
                                    echo "<tr>";
                                    echo "<td>" . $contador . "</td>";
                                    echo "<td>" . $respuesta['id_cliente'] . "</td>";
                                    echo "<td>" . $respuesta['fecha_hora_pedido'] . "</td>";
                                    echo "<td>" . $respuesta['fecha_entrega'] . "</td>";
                                    echo "<td>" . $respuesta['metodo_pago'] . "</td>";
                                    echo "<td>" . $respuesta['monto'] . "</td>";
                                    echo "<td>" . $respuesta['comprobante'] . "</td>";
                                    echo "<td>" . $respuesta['estado'] . "</td>";

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