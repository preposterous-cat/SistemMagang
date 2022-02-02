<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model{
  private $_table='tb_siswa';

  public $nisn;
  public $nama;
  public $gender;
  public $ttl;
  public $agama;
  public $no_hp;
  public $email;
  public $alamat;
  public $tingkat;
  public $asal;
  public $jurusan;
  public $start;
  public $end;

  public function rules(){
    return [
      ['field' => 'nisn',
      'label' => 'NISN',
      'rules' => 'required'],

      ['field' => 'nama',
      'label' => 'Nama',
      'rules' => 'required'],

      ['field' => 'gender',
      'label' => 'Gender',
      'rules' => 'required'],

      ['field' => 'ttl',
      'label' => 'TTL',
      'rules' => 'required'],

      ['field' => 'agama',
      'label' => 'Agama',
      'rules' => 'required'],

      ['field' => 'no_hp',
      'label' => 'No_HP',
      'rules' => 'required'],

      ['field' => 'email',
      'label' => 'Email',
      'rules' => 'required'],

      ['field' => 'alamat',
      'label' => 'Alamat',
      'rules' => 'required'],

      ['field' => 'tingkat',
      'label' => 'Tingkat',
      'rules' => 'required'],

      ['field' => 'asal',
      'label' => 'Asal',
      'rules' => 'required'],

      ['field' => 'jurusan',
      'label' => 'Jurusan',
      'rules' => 'required'],

      ['field' => 'start',
      'label' => 'Start',
      'rules' => 'required'],

      ['field' => 'end',
      'label' => 'End',
      'rules' => 'required'],

    ];

  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getByNisn($nisn){
    return $this->db->get_where($this->_table, ['nisn' => $nisn])->row();
  }

  public function getByEmail($email){
    return $this->db->get_where($this->_table, ['email' => $email])->row();
  }

  public function getByAsal($asal){
    return $this->db->get_where($this->_table, ['asal' => $asal])->num_rows();
  }

  public function getList(){
    $this->db->select('*');
    $this->db->from($this->_table);
    $this->db->join('tb_pengisian_siswa', ''.$this->_table.'.nisn'.'=tb_pengisian_siswa.nisn');
    $this->db->where('tb_pengisian_siswa.no_regis', $this->session->userdata('no_regis'));
    $this->db->where('tb_pengisian_siswa.checked', 'Checked');
    $query = $this->db->get();
    return $query->result();
  }

  public function save(){
      $post=$this->input->post();
      $this->nisn= $post['nisn'];
      $this->nama=$post['nama'];
      $this->gender=$post['gender'];
      $this->ttl=$post['ttl'];
      $this->agama=$post['agama'];
      $this->no_hp=$post['no_hp'];
      $this->email=$post['email'];
      if ($this->getByEmail($this->email) > 0) {
        redirect('User/index', 'refresh');
      }
      $this->alamat=$post['alamat'];
      $this->tingkat=$post['tingkat'];
      $this->asal=$post['asal'];
      $this->jurusan=$post['jurusan'];
      $this->start=$post['start'];
      $this->end=$post['end'];
      $this->db->insert($this->_table, $this);
  }

  public function update(){
    $post=$this->input->post();
    $this->nisn= $post['nisn'];
    $this->nama=$post['nama'];
    $this->gender=$post['gender'];
    $this->ttl=$post['ttl'];
    $this->agama=$post['agama'];
    $this->no_hp=$post['no_hp'];
    $this->email=$post['email'];
    $this->alamat=$post['alamat'];
    $this->tingkat=$post['tingkat'];
    $this->asal=$post['asal'];
    $this->jurusan=$post['jurusan'];
    $this->start=$post['start'];
    $this->end=$post['end'];
    $this->db->update($this->_table, $this, array('nisn' => $post['nisn']));
  }

  public function delete($nisn){
    return $this->db->delete($this->_table, array('nisn' => $nisn));
  }

  public function activate($nisn){
    $data=array('status' => 'Aktif');
    $this->db->update($this->_table, $data, array('nisn' => $nisn, 'status' => 'Tidak Aktif'));
  }

  public function deactivate($nisn){
    $data=array('status' => 'Tidak Aktif');
    $this->db->update($this->_table, $data, array('nisn' => $nisn, 'status' => 'Aktif'));
  }

}
