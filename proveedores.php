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
                        <h4>Registrar Proveedores</h4>
                        <div class="card">
                            <div class="card-body">
                                <form action="operaciones/registrar_proveedor.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Ruc: </label>
                                        <input type="number" name="ruc" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Razon Social:</label>
                                        <input type="text" name="razon_social" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Correo:</label>
                                        <input type="email" name="correo" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Telefono:</label>
                                        <input type="number" name="telefono" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Direccion:</label>
                                        <input type="text" name="direccion" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <!---
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Metodo de pago:</label>
                                        <input type="text" name="direccion" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>

                                    --->

                                     <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12">Metodo de Pago</label>
                               
                                    <select name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    <option>----Seleccione El metodo de pago----</option>
                                    <?php
                                            $b_roles = "SELECT * FROM roles";
                                            $r_b_roles = mysqli_query($conexion, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['nombre'];?></option>
                                            <?php }?>
                                    <option>BCP</option>
                                     <option>iNTERBANCK</option>
                                     <option>BVA</option>

                                    </select>
                                 </div>

                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                    </div>
                                </form>
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