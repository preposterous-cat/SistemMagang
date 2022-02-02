<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->model('Laporan_model');
    $this->load->model('Project_model');
    $this->load->model('Pengisian_mhs_model');
    $this->load->model('Mhs_model');
    $this->load->library('form_validation');
    $this->load->model('Surat_model');
    $this->load->model('Siswa_model');
    $this->load->model('Pengisian_siswa_model');
  }

  public function index()
  {
    $this->load->view('Admin/Admin_login');
  }

  public function login_act(){
    $post=$this->input->post();
    $admin=$post['admin'];
    $pw=$post['pw'];
    if ($admin == 'AdminKP' & $pw == 'SayaAdmin123') {
      $data_session= array(
        'status' => 'login',
        'id' => 'Master'
      );
      $this->session->set_userdata($data_session);
      redirect('Admin/admin_page', 'refresh');
    }else{
      $this->session->set_flashdata('Fail_admin', 'Username atau Password Salah');
      redirect('Admin/index', 'refresh');
    }
  }

  public function admin_page(){
    if ($this->session->userdata('status') == 'login') {
      $this->load->view('Admin/Admin_page');
    }else redirect('Admin/index', 'refresh');
  }

  public function statistik_page(){
    $mhs=$this->Mhs_model;
    $sis=$this->Siswa_model;
    $lap=$this->Laporan_model;
    $pro=$this->Project_model;
    $sur=$this->Surat_model;
    $data['univ']=$mhs->getAll();
    $data['sekolah']=$sis->getAll();
    $data['laporan']=$lap->getAll();
    $data['surat']=$sur->getAll();
    $data['project']=$pro->getAll();
    $this->load->view('Admin/Admin_statistik', $data);
  }

  public function peserta_page(){
    $mhs=$this->Mhs_model;
    $sis=$this->Siswa_model;
    $data['mhs']=$mhs->getAll();
    $data['siswa']=$sis->getAll();
    $this->load->view('Admin/Admin_peserta', $data);
  }

  public function laporan_page(){
    $lap=$this->Laporan_model;
    $data['laporan']=$lap->getAll();
    $this->load->view('Admin/Admin_laporan', $data);
  }

  public function projek_page(){
    $pro=$this->Project_model;
    $data['projek']=$pro->getAll();
    $this->load->view('Admin/Admin_projek', $data);
  }

  public function surat_page(){
    $sur=$this->Surat_model;
    $data['surat']=$sur->getAll();
    $this->load->view('Admin/Admin_surat', $data);
  }

  public function user_page(){
    $user=$this->User_model;
    $data['user']=$user->getAll();
    $this->load->view('Admin/Admin_user', $data);
  }

  public function lihat_Data_Mhs($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $mhs=$this->Mhs_model;
    $data['mhs']=$mhs->getByNim($id);
    $this->load->view('Admin/Admin_lihat_mhs', $data);
  }

  public function lihat_Data_Siswa($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $sis=$this->Siswa_model;
    $data['siswa']=$sis->getByNisn($id);
    $this->load->view('Admin/Admin_lihat_siswa', $data);
  }

  public function edit_mhs($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $pengMhs=$this->Pengisian_mhs_model;
    $mhs=$this->Mhs_model;
    $validation = $this->form_validation;
    $validation->set_rules($mhs->rules());
    if ($validation->run()) {
      $mhs->update();
      $pengMhs->update();
      $this->session->set_flashdata('success_update', 'Berhasil Diubah!');
    }

    $data['mhs']=$mhs->getByNim($id);
    $this->load->view('Admin/Admin_edit_mhs', $data);

  }

  public function edit_siswa($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $pengSis=$this->Pengisian_siswa_model;
    $sis=$this->Siswa_model;
    $validation = $this->form_validation;
    $validation->set_rules($sis->rules());
    if ($validation->run()) {
      $sis->update();
      $pengSis->update();
      $this->session->set_flashdata('success_update', 'Berhasil Diubah!');
    }

    $data['siswa']=$sis->getByNisn($id);
    $this->load->view('Admin/Admin_edit_siswa', $data);
  }

  public function edit_user($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $user=$this->User_model;
    $validation = $this->form_validation;
    $validation->set_rules($user->rules());
    if ($validation->run()) {
      $user->update();
      $this->session->set_flashdata('success_update', 'Berhasil Diubah!');
    }

    $data['user']=$user->getById($id);
    $this->load->view('Admin/Admin_edit_user', $data);

  }

  public function activated_mhs($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $mhs=$this->Mhs_model;
    $data['mhs']=$mhs->getByNim($id);
    if ($data['mhs']->status == 'Aktif') {
      $mhs->deactivate($id);
      redirect('Admin/peserta_page', 'refresh');
    }else{
      $mhs->activate($id);
      redirect('Admin/peserta_page', 'refresh');
    }
  }

  public function activated_siswa($id=null){
    if (!isset($id)) {
      redirect('Admin/index', 'refresh');
    }
    $sis=$this->Siswa_model;
    $data['siswa']=$sis->getByNisn($id);
    if ($data['siswa']->status == 'Aktif') {
      $sis->deactivate($id);
      redirect('Admin/peserta_page', 'refresh');
    }else{
      $sis->activate($id);
      redirect('Admin/peserta_page', 'refresh');
    }
  }

  public function hapus_mhs($nim=null){
    $mhs=$this->Mhs_model;
    $pengMhs= $this->Pengisian_mhs_model;
    $mhs->delete($nim);
    $pengMhs->delete($nim);
    redirect('Admin/peserta_page', 'refresh');
  }

  public function hapus_siswa($nisn=null){
    $sis=$this->Siswa_model;
    $pengSis= $this->Pengisian_siswa_model;
    $sis->delete($nisn);
    $pengSis->delete($nisn);
    redirect('Admin/peserta_page', 'refresh');
  }

  public function hapus_user($id=null){
    $user=$this->User_model;
    $user->delete($id);
    redirect('Admin/user_page', 'refresh');
  }

  public function hapus_laporan($file=null){
    $lap=$this->Laporan_model;
    $lap->delete($file);
    redirect('Admin/laporan_page', 'refresh');
  }

  public function hapus_projek($file=null){
    $pro=$this->Project_model;
    $pro->delete($file);
    redirect('Admin/projek_page', 'refresh');
  }

  public function hapus_surat($file=null){
    $sur=$this->Surat_model;
    $sur->delete($file);
    redirect('Admin/surat_page', 'refresh');
  }
}
