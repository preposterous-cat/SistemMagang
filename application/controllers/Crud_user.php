<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_user extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('form_validation');
  }

  public function add()
  {
    $user=$this->User_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());
      $user->save();
      $this->session->set_flashdata('success', 'Berhasil Disimpan. Silakan Melakukan Login!');
    redirect('Welcome', 'refresh');
  }

}
