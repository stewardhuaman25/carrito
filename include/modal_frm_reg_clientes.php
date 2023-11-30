 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".cliente">+ Nuevo</button>


<div class="modal fade cliente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Lista de clientes</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...<form action="operaciones/registrar_cliente.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > DNI: </label>
                                        <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >ruc_dni:</label>
                                        <input type="text" name="razon_social" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >razon_social:</label>
                                        <input type="email" name="telefono" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Telefono:</label>
                                        <input type="number" name="correo" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >correo:</label>
                                        <input type="text" name="direccion" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >direccion:</label>
                                        <input type="date" name="direccion_envio" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>   
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >direccion_envio:</label>
                                        <input type="date" name="direccion_envio" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>   
                                    <!--  
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Rol:</label>
                                        <select name="rol" id="">
                                        <option></option>
                                            <?php
                                            $b_roles = "SELECT * FROM roles";
                                            $r_b_roles = mysqli_query($conexion, $b_roles);
                                            while ($datos_roles = mysqli_fetch_array($r_b_roles)) {?>
                                                <option value="<?php echo $datos_roles['id'];?>"><?php echo $datos_roles['nombre'];?></option>
                                            <?php }?>                                         
                                        </select>
                                    </div>   --> 

                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                    </div>
                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>