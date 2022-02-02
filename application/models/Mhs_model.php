<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_model extends CI_Model{
  private $_table='tb_mhs';

  public $nim;
  public $nama;
  public $gender;
  public $ttl;
  public $agama;
  public $no_hp;
  public $email;
  public $alamat;
  public $jenis;
  public $tingkat;
  public $asal;
  public $fakultas;
  public $jurusan;
  public $start;
  public $end;
  public $skill;

  public function rules(){
    return [
      ['field' => 'nim',
      'label' => 'NIM',
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

      ['field' => 'jenis',
      'label' => 'Jenis',
      'rules' => 'required'],

      ['field' => 'tingkat',
      'label' => 'Tingkat',
      'rules' => 'required'],

      ['field' => 'asal',
      'label' => 'Asal',
      'rules' => 'required'],

      ['field' => 'fakultas',
      'label' => 'Fakultas',
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

      ['field' => 'skill',
      'label' => 'Skill',
      'rules' => 'required'],
    ];

  }

  public function getAll(){
    return $this->db->get($this->_table)->result();
  }

  public function getByNim($nim){
    return $this->db->get_where($this->_table, ['nim' => $nim])->row();
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
    $this->db->join('tb_pengisian_mhs', ''.$this->_table.'.nim'.'=tb_pengisian_mhs.nim');
    $this->db->where('tb_pengisian_mhs.no_regis', $this->session->userdata('no_regis'));
    $this->db->where('tb_pengisian_mhs.checked', 'Checked');
    $query = $this->db->get();
    return $query->result();
  }

  public function getUniversitas(){
    $this->db->select($this->_table.'.asal');
    $this->db->from($this->_table);
    $query = $this->db->get();
    return $query->result();
  }

  public function save(){
      $post=$this->input->post();
      $this->nim= $post['nim'];
      $this->nama=$post['nama'];
      $this->gender=$post['gender'];
      $this->ttl=$post['ttl'];
      $this->agama=$post['agama'];
      $this->no_hp=$post['no_hp'];
      $this->email=$post['email'];
      $this->alamat=$post['alamat'];
      $this->jenis=$post['jenis'];
      $this->tingkat=$post['tingkat'];
      $this->asal=$post['asal'];
      $this->fakultas=$post['fakultas'];
      $this->jurusan=$post['jurusan'];
      $this->start=$post['start'];
      $this->end=$post['end'];
      $this->skill=$post['skill'];
      $this->db->insert($this->_table, $this);
  }

  public function update(){
    $post=$this->input->post();
    $this->nim= $post['nim'];
    $this->nama=$post['nama'];
    $this->gender=$post['gender'];
    $this->ttl=$post['ttl'];
    $this->agama=$post['agama'];
    $this->no_hp=$post['no_hp'];
    $this->email=$post['email'];
    $this->alamat=$post['alamat'];
    $this->jenis=$post['jenis'];
    $this->tingkat=$post['tingkat'];
    $this->asal=$post['asal'];
    $this->fakultas=$post['fakultas'];
    $this->jurusan=$post['jurusan'];
    $this->start=$post['start'];
    $this->end=$post['end'];
    $this->skill=$post['skill'];
    $this->db->update($this->_table, $this, array('nim' => $post['nim']));
  }

  public function delete($nim){
    return $this->db->delete($this->_table, array('nim' => $nim));
  }

  public function activate($nim){
    $data=array('status' => 'Aktif');
    $this->db->update($this->_table, $data, array('nim' => $nim, 'status' => 'Tidak Aktif'));
  }

  public function deactivate($nim){
    $data=array('status' => 'Tidak Aktif');
    $this->db->update($this->_table, $data, array('nim' => $nim, 'status' => 'Aktif'));
  }
}
