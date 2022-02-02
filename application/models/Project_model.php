<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model{
  private $_table='tb_projek';

  public $no_regis;
  public $nama_projek;
  public $kreator;
  public $link;
  public $tanggal;

  public function rules(){
    return [
      ['field' => 'no_regis',
      'label' => 'No Register',
      'rules' => 'required'],

      ['field' => 'nama_projek',
      'label' => 'Nama Projek',
      'rules' => 'required'],

      ['field' => 'kreator',
      'label' => 'Kreator',
      'rules' => 'required'],

      ['field' => 'link',
      'label' => 'Link',
      'rules' => 'required'],

      ['field' => 'tanggal',
      'label' => 'Tanggal',
      'rules' => 'required'],
    ];
  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }


  public function save(){
      $post=$this->input->post();
      $this->no_regis= $this->session->userdata('no_regis');
      $this->nama_projek=$post['nama'];
      $this->kreator=$post['kreator'];
      $this->link=$post['link'];
      $this->tanggal=date('d-m-Y');
      $this->db->insert($this->_table, $this);
  }

  public function delete($file){
    return $this->db->delete($this->tableName, array('nama_projek' => $file));
  }
}
