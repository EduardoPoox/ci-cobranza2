<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poblacion_m extends MY_Model {

  protected $_table_name = 'poblacion';

  public $coin_rules = array(
    array(
      'field' => 'nombre',
      'label' => 'nombre poblacion',
      'rules' => 'trim|required'
    ),
    array(
      'field' => 'descripcion',
      'label' => 'descripcion',
      'rules' => 'trim|required'
    ),
  );

  public function get_new()
  {
    $poblacion = new stdClass(); //clase vacia
    $poblacion->nombre = '';
    $poblacion->descripcion = '';

    return $poblacion;
  }

}