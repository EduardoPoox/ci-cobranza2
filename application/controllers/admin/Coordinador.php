<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinador extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('coordinador_m');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->session->userdata('loggedin') == TRUE || redirect('user/login');
  }

  public function index()
  {
    $data['coordinador'] = $this->coordinador_m->get();
    $data['subview'] = 'admin/coordinador/index';
    $this->load->view('admin/_main_layout', $data);
  }

  public function edit($id = NULL)
  {
    if ($id) {
      $data['coordinador'] = $this->coordinador_m->get($id);
      $data['poblacion'] = $this->coordinador_m->get_editProvinces($data['coordinador']->id_poblacion);
    } else {
      $data['coordinador'] = $this->coordinador_m->get_new();
    }

    $data['poblacion'] = $this->coordinador_m->get_poblacion();

    $rules = $this->coordinador_m->coordinador_rules;
   
    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == TRUE) {
      
      $cst_data = $this->coordinador_m->array_from_post(['nombre','direccion', 'telefono', 'id_poblacion']);
      
      $this->coordinador_m->save($cst_data, $id);

      if ($id) {
        $this->session->set_flashdata('msg', 'Coordinador editado correctamente');
      } else {
        $this->session->set_flashdata('msg', 'Coordinador agregado correctamente');
      }
      
      redirect('admin/coordinador');

    }

    $data['subview'] = 'admin/coordinador/edit';
    $this->load->view('admin/_main_layout', $data);
  }

  public function ajax_getProvinces($dp_id)
  {
    echo $this->coordinador_m->get_provinces($dp_id);
  }

  public function ajax_getDistricts($pr_id)
  {
    echo $this->coordinador_m->get_districts($pr_id);
  }

}

/* End of file Customers.php */
/* Location: ./application/controllers/admin/Coordinador.php */