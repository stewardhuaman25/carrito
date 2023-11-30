 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".productos">+ Nuevo</button>


 <div class="modal fade productos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title h4" id="myLargeModalLabel">Lista de productos</h5>
                 <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="operaciones/registrar_categoria.php" method="POST" enctype="multipart/form-data">
                     
                 <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" >direccion:</label>
                                        <input type="text" name="categoria" class="form-control col-lg-4 col-md-4 col-sm-12" required>
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