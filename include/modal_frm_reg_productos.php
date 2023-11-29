 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".producto">+ Nuevo</button>
 <h2> lista de productos</h2>

<div class="modal fade producto" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Lista de productos</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <form action="operaciones/registrar_productos.php" method="POST"  enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Codigo: </label>
                                        <input type="number" name="codigo" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Descripción:</label>
                                        <input type="text" name="descripcion" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Detalle:</label>
                                        <input type="text" name="detalle" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Precio de Compra:</label>
                                        <input type="number" name="precio_compra" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Precio de Venta:</label>
                                        <input type="number" name="precio_venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Stock:</label>
                                        <input type="text" name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Estado:</label>
                                        <select name="estado" id=""  class="form-control col-lg-10 col-md-10 col-sm-12" required>
                                            <option value="1">Activo</option>
                                            <option value="0">Inactivo</option>

                                        </select>
                                       
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >Imagen:</label>
                                        <input type="file" name="imagen"  required accept="image/*">
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>