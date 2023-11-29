 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevoo</button>
 <h2> lista de proveedores</h2>

<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Lista de proveedores</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...<form action="operaciones/registrar_proveedor.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > ruc_dni: </label>
                                        <input type="number" name="ruc" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > razon_social:</label>
                                        <input type="text" name="razon_social" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >telefono:</label>
                                        <input type="number" name="telefono" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >correo:</label>
                                        <input type="email" name="correo" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Direccion:</label>
                                        <input type="text" name="direccion" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >metodo_pago:</label>
                                        <input type="text" name="metodo_pago" class="form-control col-lg-4 col-md-4 col-sm-12" required>
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