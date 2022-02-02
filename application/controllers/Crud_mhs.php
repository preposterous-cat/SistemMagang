<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_mhs extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mhs_model');
    $this->load->model('Pengisian_mhs_model');
    $this->load->library('form_validation');
  }

  public function add()
  {
    $mhs=$this->Mhs_model;
    $pengMhs= $this->Pengisian_mhs_model;
    $validation = $this->form_validation;
    $validation->set_rules($mhs->rules());
    if ($validation->run()) {
      $mhs->save();
      $pengMhs->save();
      $this->session->set_flashdata('success', 'Berhasil Disimpan!');
    }else {
      $this->session->set_flashdata('Fail', 'Tidak Berhasil Disimpan!');
    }
    redirect('User/confirm_user', 'refresh');
  }

}
