<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
  private $_table='tb_user';

  public $no_regis;
  public $password;
  public $nama;
  public $email;

  public function rules(){
    return [
      ['field' => 'no_regis',
      'label' => 'No_regis',
      'rules' => 'required'],


      ['field' => 'password',
      'label' => 'Password',
      'rules' => 'required'],

      ['field' => 'nama',
      'label' => 'Nama',
      'rules' => 'required'],

      ['field' => 'email',
      'label' => 'Email',
      'rules' => 'required'],
    ];

  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getById($no){
    return $this->db->get_where($this->_table, ['no_regis' => $no])->row();
  }

  public function getByEmail($email){
    return $this->db->get_where($this->_table, ['email' => $email])->num_rows();
  }

  public function login(){
    $post=$this->input->post();
    $this->no_regis=$post['no_regis'];
    $this->password=$post['password'];
    $where= array(
      'no_regis' => $this->no_regis,
      'password' => $this->password
    );
    return $this->db->get_where($this->_table, $where)->num_rows();
  }

  public function save(){
      $post=$this->input->post();
      $this->no_regis= $post['no_regis'];
      $this->password=$post['password'];
      $this->nama=$post['nama'];
      $this->email=$post['email'];
      if ($this->getByEmail($this->email) > 0) {
        $this->session->set_flashdata('Fail', 'Tidak Berhasil Disimpan!Email sudah dipakai');
        redirect('Welcome', 'refresh');
      }else $this->db->insert($this->_table, $this);
  }

  public function update(){
    $post=$this->input->post();
    $this->no_regis= $post['no_regis'];
    $this->password=$post['password'];
    $this->nama=$post['nama'];
    $this->email=$post['email'];
    $this->db->update($this->_table, $this, array('no_regis' => $post['no_regis']));
  }

  public function delete($no_regis){
    return $this->db->delete($this->_table, array('no_regis' => $no_regis));
  }

}
