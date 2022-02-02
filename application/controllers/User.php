<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model');
    $this->load->model('Pengisian_mhs_model');
    $this->load->model('Mhs_model');
    $this->load->library('form_validation');
    $this->load->model('Surat_model');
    $this->load->model('Laporan_model');
    $this->load->model('Project_model');
    $this->load->model('Siswa_model');
    $this->load->model('Pengisian_siswa_model');
  }

  public function index()
  {
    if($this->session->userdata('status') != "login"){
			redirect('Welcome');
		}else{
      $this->load->view('User_page');
    }
  }

  public function login_act(){
    $user=$this->User_model;
    if ($user->login() > 0) {
      $data_session= array(
        'no_regis' => $user->no_regis,
        'status' => "login"
      );
    $this->session->set_userdata($data_session);
    redirect('User/index', 'refresh');
  }else {
    $this->session->set_flashdata('gagal_login', 'Login tidak berhasil');
    redirect('Welcome', 'refresh');
    }
  }

  public function logout(){
	  $this->session->sess_destroy();
	  redirect(base_url('Welcome'));
  }

  public function form_user(){
    $this->load->view('Form_user');

  }

  public function lihat_Data_Siswa($id=null){
    $sis=$this->Siswa_model;
    $data['siswa']=$sis->getByNisn($id);
    $this->load->view('Lihat_data_siswa', $data);
  }

  public function lihat_Data_Mhs($id=null){
    $mhs=$this->Mhs_model;
    $data['mhs']=$mhs->getByNim($id);
    $this->load->view('Lihat_data_mhs', $data);
  }

  public function edit_siswa($id=null){
    if (!isset($id)) {
      redirect('User/index', 'refresh');
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
    $data['peng']=$pengSis->getByNisn($id);
    if ($data['peng']->no_regis != $this->session->userdata('no_regis') || $data['peng']->checked == 'Checked') {
      $this->session->set_flashdata('failed_access', 'Data tidak bisa diakses!');
      redirect('User/confirm_user', 'refresh');
    }else{
      $this->load->view('Edit_siswa', $data);
    }

  }

  public function edit_mhs($id=null){
    if (!isset($id)) {
      redirect('User/index', 'refresh');
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
    $data['peng']=$pengMhs->getByNim($id);
    if ($data['peng']->no_regis != $this->session->userdata('no_regis') || $data['peng']->checked == 'Checked') {
      $this->session->set_flashdata('failed_access', 'Data tidak bisa diakses!');
      redirect('User/confirm_user', 'refresh');
    }else{
      $this->load->view('Edit_mhs', $data);
    }
  }

  public function confirm_user(){
    $mhs=$this->Mhs_model;
    $pengMhs=$this->Pengisian_mhs_model;
    $sis=$this->Siswa_model;
    $pengSis=$this->Pengisian_siswa_model;
    $data['pengisian']= $pengMhs->getByNoRegis($this->session->userdata('no_regis'));
    $data['pengisian_siswa']= $pengSis->getByNoRegis($this->session->userdata('no_regis'));
    $data['siswa']=$sis->getAll();
    $this->load->view('Confirm_user', $data);
  }

  public function checked_siswa(){
    $pengSis=$this->Pengisian_siswa_model;
    $pengSis->Checked();
    redirect('User/confirm_user', 'refresh');
  }

  public function checked_mhs(){
    $pengMhs=$this->Pengisian_mhs_model;
    $pengMhs->Checked();
    redirect('User/confirm_user', 'refresh');
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

  public function add_siswa()
  {
    $sis=$this->Siswa_model;
    $pengSis= $this->Pengisian_siswa_model;
    $validation = $this->form_validation;
    $validation->set_rules($sis->rules());
    if ($validation->run()) {
      $sis->save();
      $pengSis->save();
      $this->session->set_flashdata('success', 'Berhasil Disimpan!');
    }else {
      $this->session->set_flashdata('Fail', 'Tidak Berhasil Disimpan!');
    }
    redirect('User/confirm_user', 'refresh');
  }

  public function add_surat(){
        $data = array();
        // If file upload form submitted
        if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])){
            $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                // File upload configuration
                $uploadPath = './assets/uploads/files';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'pdf|docx|doc';

                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                // Upload file to server
                if($this->upload->do_upload('file')){

                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i]['nama_file'] = $fileData['file_name'];
                    $uploadData[$i]['tanggal_upload'] = date("d-m-Y");
                    date_default_timezone_set('Asia/Jakarta');
                    $uploadData[$i]['waktu_upload'] = date("H:i:s");
                    $uploadData[$i]['no_regis'] = $this->session->userdata('no_regis');
                }else {
                  echo $this->upload->display_errors();
                }
            }

            if(!empty($uploadData)){
                // Insert files data into the database
                $insert = $this->Surat_model->insert($uploadData);
                $this->session->set_flashdata('success_surat', 'Berkas Berhasil di-Upload');
            }else{
                $this->session->set_flashdata('Fail_surat', 'Berkas Gagal di-Upload. Mohon periksa kembali ekstensi File(PDF/Doc/Docx)
                Atau periksa ukuran file yang mungkin terlalu besar');
            }
        }

        redirect('User/Confirm_user', 'refresh');
    }

    public function add_laporan(){
          $data = array();
          // If file upload form submitted
          if($this->input->post('fileSubmit') && !empty($_FILES['files']['name'])){
              $filesCount = count($_FILES['files']['name']);
              for($i = 0; $i < $filesCount; $i++){
                  $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                  $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                  $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                  $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                  $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                  // File upload configuration
                  $uploadPath = './assets/uploads/laporan';
                  $config['upload_path'] = $uploadPath;
                  $config['allowed_types'] = 'pdf|docx|doc';

                  // Load and initialize upload library
                  $this->load->library('upload', $config);
                  $this->upload->initialize($config);

                  // Upload file to server
                  if($this->upload->do_upload('file')){

                      // Uploaded file data
                      $fileData = $this->upload->data();
                      $post=$this->input->post();
                      $uploadData[$i]['nama_file'] = $fileData['file_name'];
                      $uploadData[$i]['tanggal'] = date("d-m-Y");
                      $uploadData[$i]['author'] =$post['author'];
                      $uploadData[$i]['judul'] =$post['judul'];
                      $uploadData[$i]['no_regis'] = $this->session->userdata('no_regis');
                  }else {
                    echo $this->upload->display_errors();
                  }
              }

              if(!empty($uploadData)){
                  // Insert files data into the database
                  $insert = $this->Laporan_model->insert($uploadData);
                  $this->session->set_flashdata('success_laporan', 'Laporan Berhasil di-Upload');
              }else{
                  $this->session->set_flashdata('Fail_laporan', 'Laporan Gagal di-Upload. Mohon periksa kembali ekstensi File(PDF/Doc/Docx)
                  Atau periksa ukuran file yang mungkin terlalu besar');
              }
          }

          redirect('User/list_user', 'refresh');
      }

    public function add_project(){
      $pro=$this->Project_model;
      $validation = $this->form_validation;
      $validation->set_rules($pro->rules());
      if ($validation->run()) {
          $pro->save();
          $this->session->set_flashdata('success_project', 'Project Berhasil di-upload');
      }else{
        $this->session->set_flashdata('Fail_project', 'Project Gagal di-upload');
      }

      redirect('User/list_user', 'refresh');
    }

    public function hapus_mhs($nim=null){
      $mhs=$this->Mhs_model;
      $pengMhs= $this->Pengisian_mhs_model;
      $mhs->delete($nim);
      $pengMhs->delete($nim);
      redirect('User/confirm_user');
    }

    public function hapus_siswa($nisn=null){
      $sis=$this->Siswa_model;
      $pengSis= $this->Pengisian_siswa_model;
      $sis->delete($nisn);
      $pengSis->delete($nisn);
      redirect('User/confirm_user');
    }

    public function list_user(){
      $mhs=$this->Mhs_model;
      $sis=$this->Siswa_model;
      $data['list']=$mhs->getList();
      $data['list2']=$sis->getList();
      $this->load->view('List_user', $data);
    }

}
