<div class="card shadow mb-4">
  <div class="card-header py-3"><?php echo empty($customer->first_name) ? 'Nuevo Coordinador' : 'Editar Coordinador'; ?></div>
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
      <div class="form-group col-md-3">
        <label class="small mb-1" for="inputUsername">Nombre Completo </label>
        <input class="form-control" id="inputUsername" type="text" name="nombre" value="<?php echo set_value('nombre', $this->input->post('nombre') ? $this->input->post('nombre') : $coordinador->nombre); ?>">
      </div>

      <div class="form-group col-md-3">
        <label class="small mb-1" for="inputUsername">Ingresar Dirección</label>
        <input class="form-control" id="inputUsername" type="text" name="direccion" value="<?php echo set_value('direccion', $this->input->post('direccion') ? $this->input->post('direccion') : $coordinador->direccion); ?>">
      </div>

      <div class="form-group col-md-3">
        <label class="small mb-1" for="exampleFormControlTextarea1">Num de Teléfono</label>
        <input class="form-control" id="inputUsername" type="text" name="telefono" value="<?php echo set_value('telefono', $this->input->post('telefono') ? $this->input->post('telefono') : $coordinador->telefono); ?>">
      </div>

    </div>

    <div class="form-row">

        <div class="form-group col-12 col-md-4">
            <label class="small mb-1" for="exampleFormControlSelect2">Seleccione la Población</label>
            <select class="form-control" id="exampleFormControlSelect2" name="id_poblacion">

                <?php foreach ($poblacion as $poblacion): ?>
                <option value="<?php echo $poblacion->id ?>"><?php echo $poblacion->nombre ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Registrar coordinador</button>
    <a href="<?php echo site_url('admin/coordinador/'); ?>" class="btn btn-dark">Cancelar</a>
    
    <?php echo form_close() ?>
  </div>
</div>