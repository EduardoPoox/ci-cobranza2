<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinador_m extends MY_Model {

  protected $_table_name = 'coordinador';
 
  public $coordinador_rules = array(
    array(
      'field' => 'nombre',
      'label' => 'nombre',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'direccion',
      'label' => 'direccion',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'telefono',
      'label' => 'telefono',
      'rules' => 'trim|required'
    )
  );

  public function get_new()
  {
    $coordinador = new stdClass(); //clase vacia
    $coordinador->nombre = '';
    $coordinador->direccion = '';
    $coordinador->telefono = '';
    $coordinador->id_poblacion = 0;

    return $coordinador;
  }

  public function get_poblacion()
  {
    return $this->db->get('poblacion')->result();
  }

}

/* End of file coordinadors_m.php */
/* Location: ./application/models/coordinadors_m.php */