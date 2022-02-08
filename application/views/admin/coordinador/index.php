<div class="card shadow mb-4">
  <div class="card-header d-flex align-items-center justify-content-between py-3">
    <h6 class="m-0 font-weight-bold text-primary">Listar Coordinadores</h6>
    <a class="d-sm-inline-block btn btn-sm btn-success shadow-sm" href="<?php echo site_url('admin/coordinador/edit'); ?>"><i class="fas fa-plus-circle fa-sm"></i> Nuevo cliente</a>
  </div>
  <div class="card-body"> 
    <?php if ($this->session->flashdata('msg')): ?>
      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <?= $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
    <?php endif ?>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Poblacion</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php if(count($coordinador)): foreach($coordinador as $ct): ?>
            <tr>
              <td><?php echo $ct->nombre ?></td>
              <td><?php echo $ct->direccion ?></td>
              <td><?php echo $ct->telefono ?></td>
              <td><?php echo $ct->id_poblacion ?></td>
              <td>
                <a href="<?php echo site_url('admin/coordinador/edit/'.$ct->id); ?>" class="btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm"></i> Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="7" class="text-center">No existen Coordinadores, agregar un nuevo coordinador.</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>