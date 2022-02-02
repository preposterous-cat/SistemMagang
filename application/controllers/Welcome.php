<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->library('form_validation');
  }

  function index()
  {
    $no=abs(crc32(uniqid()));
    $data['users']=$this->User_model->getById($no);
    if ($data['users'] <= 0) {
        $regis=array('noreg' => $no);
        $this->load->view('Home', $regis);
    }else {
        do {
          $no=abs(crc32(uniqid()));
          $data['users']=$this->User_model->getById($no);
        } while ($data['users']>0);
        $regis=array('noreg' => $no);
        $this->load->view('Home', $regis);
    }

  }

}
