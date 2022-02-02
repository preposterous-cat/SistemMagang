<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Laporan_model extends CI_Model{
    function __construct() {
        $this->tableName = 'tb_laporan';
    }

    /*
     * Fetch files data from the database
     * @param id returns a single record if specified, otherwise all records
     */
    public function getRows($id = ''){
        $this->db->select('index_laporan, no_regis, judul, author, nama_file, tanggal');
        $this->db->from('tb_laporan');
        if($id){
            $this->db->where('index_laporan',$id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('tanggal','desc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        return !empty($result)?$result:false;
    }

    public function getAll(){
      return $this->db->get($this->tableName)->result();
    }

    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */
    public function insert($data = array()){
        $insert = $this->db->insert_batch('tb_laporan',$data);
        return $insert?true:false;
    }

    public function delete($file){
      return $this->db->delete($this->tableName, array('nama_file' => $file));
    }
  }
