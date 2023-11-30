 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".producto">+ Nuevo</button>


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
                 <form action="operaciones/registrar_productos.php" method="POST" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>">
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12"> Codigo: </label>
                         <input type="number" name="codigo" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Descripción:</label>
                         <input type="text" name="descripcion" class="form-control col-lg-10 col-md-10 col-sm-12" required> 
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Detalle:</label>
                         <input type="text" name="detalle" class="form-control col-lg-10 col-md-10 col-sm-12" required>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Precio de Compra:</label>
                         <input type="number" name="precio_compra" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Precio de Venta:</label>
                         <input type="number" name="precio_venta" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Stock:</label>
                         <input type="text" name="stock" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Estado:</label>
                         <select name="estado" id="" class="form-control col-lg-2 col-md-10 col-sm-12" required>
                             <option value=""></option>
                             <option value="1">Activo</option>
                             <option value="0">Inactivo</option>

                         </select>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">categoria:</label>
                         <select name="categoria" id="">
                             <option></option>
                             <?php
                                $b_categoria = "SELECT * FROM categoria";
                                $r_b_categoria = mysqli_query($conexion, $b_categoria);
                                while ($datos_categoria = mysqli_fetch_array($r_b_categoria)) { ?>
                                 <option value="<?php echo $datos_categoria['id']; ?>"><?php echo $datos_categoria['nombre']; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">proveedor:</label>
                         <select name="proveedor" id="">
                             <option></option>
                             <?php
                                $b_categoria = "SELECT * FROM proveedor";
                                $r_b_categoria = mysqli_query($conexion, $b_categoria);
                                while ($datos_categoria = mysqli_fetch_array($r_b_categoria)) { ?>
                                 <option value="<?php echo $datos_categoria['id']; ?>"><?php echo $datos_categoria['razon_social']; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group row">
                         <label class="col-lg-2 col-md-2 col-sm-12">Imagen:</label>
                         <input type="file" name="imagen" required accept="image/*">
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