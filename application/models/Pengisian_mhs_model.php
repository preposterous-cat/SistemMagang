<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisian_mhs_model extends CI_Model{
  private $_table='tb_pengisian_mhs';

  public $no_regis;
  public $nim;
  public $nama;
  public $asal;
  public $checked;

  public function rules(){
    return [
      ['field' => 'no_regis',
      'label' => 'No_Regis',
      'rules' => 'required'],

      ['field' => 'nim',
      'label' => 'NIM',
      'rules' => 'required'],

      ['field' => 'nama',
      'label' => 'Nama',
      'rules' => 'required'],

      ['field' => 'asal',
      'label' => 'Asal',
      'rules' => 'required'],

      ['field' => 'checked',
      'label' => 'Checked',
      'rules' => 'required'],

      ];

  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getByNoRegis($no){
    return $this->db->get_where($this->_table, ['no_regis' => $no])->result();
  }

  public function getByNim($no){
    return $this->db->get_where($this->_table, ['nim' => $no])->row();
  }

  public function save(){
      $post=$this->input->post();
      $this->no_regis= $this->session->userdata('no_regis');
      $this->nim=$post['nim'];
      $this->nama=$post['nama'];
      $this->asal=$post['asal'];
      $this->checked= 'Unchecked';
      $this->db->insert($this->_table, $this);
  }

  public function update(){
    $post=$this->input->post();
    $this->no_regis= $this->session->userdata('no_regis');
    $this->nim=$post['nim'];
    $this->nama=$post['nama'];
    $this->asal=$post['asal'];
    $this->checked='Unchecked';
    $this->db->update($this->_table, $this, array('nim' => $post['nim']));
  }

  public function delete($nim){
    return $this->db->delete($this->_table, array('nim' => $nim));
  }

  public function checked(){
    $data=array('checked' => 'Checked');
    $this->db->update($this->_table, $data, array('no_regis' => $this->session->userdata('no_regis'), 'checked' => 'Unchecked'));
  }

}
