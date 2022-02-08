<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poblacion extends CI_Controller {

  public function __construct()
  { 
    parent::__construct();
    $this->load->model('poblacion_m');
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->session->userdata('loggedin') == TRUE || redirect('user/login');
  }

  public function index()
  {
    $data['poblacion'] = $this->poblacion_m->get();
    $data['subview'] = 'admin/poblacion/index';

    $this->load->view('admin/_main_layout', $data);
  }

  public function edit($id = NULL)
  {
    if ($id) {
      $data['poblacion'] = $this->poblacion_m->get($id);
    } else {
      $data['poblacion'] = $this->poblacion_m->get_new();
    }

    $rules = $this->poblacion_m->coin_rules;
   
    $this->form_validation->set_rules($rules);

    if ($this->form_validation->run() == TRUE) {

      $poblacion_data = $this->poblacion_m->array_from_post(['nombre','descripcion']);
      
      $this->poblacion_m->save($poblacion_data, $id);

      if ($id) {
        $this->session->set_flashdata('msg', 'Población editado correctamente');
      } else {
        $this->session->set_flashdata('msg', 'Población agregado correctamente');
      }
      
      redirect('admin/poblacion');

    }

    $data['subview'] = 'admin/poblacion/edit';
    $this->load->view('admin/_main_layout', $data);
  }

}

/* End of file Coins.php */
/* Location: ./application/controllers/admin/Coins.php */