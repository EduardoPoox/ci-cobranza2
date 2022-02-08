<div class="card shadow mb-4">
  <div class="card-header py-3"><?php echo empty($coin->name) ? 'Nueva poblacion' : 'Editar poblacion'; ?> </div>
  <div class="card-body">
    <?php if(validation_errors()) { ?> 
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo validation_errors('<li>', '</li>'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php } ?>
      
      <?php echo form_open(); ?>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="small mb-1" for="inputUsername">Ingresar población</label>
          <input class="form-control" id="inputUsername" type="text" name="nombre" value="<?php echo set_value('nombre', $this->input->post('nombre') ? $this->input->post('nombre') : $poblacion->nombre); ?>" placeholder="Ejm: Piedra de Agua">
        </div>
        <div class="form-group col-md-6">
          <label class="small mb-1" for="inputUsername">Descripción</label>
          <input class="form-control" style="text-transform:uppercase;" id="inputUsername" type="text" name="descripcion" value="<?php echo set_value('descripcion', $this->input->post('descripcion') ? $this->input->post('descripcion') : $poblacion->descripcion); ?>" placeholder="Ejm: uman">
        </div>
      </div>

      <button class="btn btn-primary" type="submit">Registrar población</button>
      <a href="<?php echo site_url('admin/poblacion/'); ?>" class="btn btn-dark">Cancelar</a>
      
      <?php echo form_close() ?>
    </div>
  </div>