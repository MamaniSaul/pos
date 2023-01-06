            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h4 class="mt-4"><?php echo $titulo; ?></h4>
                        <div>
                            <p>
                                <a href="<?php echo base_url(); ?>/productos/nuevo" class="btn btn-info"><i class="fas fa-plus"></i>.Agregar</a>
                                <a href="<?php echo base_url(); ?>/productos/eliminados" class="btn btn-warning"><i class="fas fa-trash-alt"></i>_Eliminados</a>
                                <a href="<?php echo base_url(); ?>/productos/muestraCodigos" class="btn btn-primary"><i class="fas fa-barcode"></i>Codigos de barras</a>
                            </p>
                        </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Existencias</th>
                                                <th>fecha de vencimiento</th>
                                                <th>Imagen</th>
                                          
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($datos as $dato){?>
                                                <tr>
                                                    <td><?php echo $dato['id']; ?></td>
                                                    <td><?php echo $dato['codigo']; ?></td>
                                                    <td><?php echo $dato['nombre']; ?></td>
                                                    <td><?php echo $dato['precio_venta']; ?></td>
                                                    <td><?php echo $dato['existencias']; ?></td>
                                                    <td><?php echo $dato['fecha_vencimiento']; ?></td>

                                                    <td><img src="<?php echo base_url(). '/images/productos/'.$dato['id'].'/foto_1.jpg'; ?>" width="100" /></td>

                                                    <td><a href="<?php echo base_url().'/productos/editar/'. $dato['id']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>

                                                    <td><a href="#" data-href="<?php echo base_url().'/productos/eliminar/'. $dato['id']; ?>" data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </main>
<!-- Modal -->
<div class="modal fade" id="modal-confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Desea eliminar este registro?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-light" data-dismiss="modal">No</button>
        <a class="btn btn-danger btn-ok">Si</a>
      </div>
    </div>
  </div>
</div>
