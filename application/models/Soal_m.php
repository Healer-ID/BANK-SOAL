<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_m extends CI_Model
{
    public function get()
    {
        
        $this->db->from('soal');
        $this->db->join('user','user.id_user = soal.id_user');   
        $this->db->join('kategori_soal','kategori_soal.id_kategori = soal.id_kategori');  
        $query = $this->db->get();
        return $query;
    }
    public function tambah_soal($data){
        $tambah_kategori = array(
            'id_user' => $data['iduser'],
            'id_kategori' => $data['id_kategori'],
            'tanggal_upload' => $data['tanggal_upload'],
            'nama_dosen' => $data['nama_dosen'],
            'tahun_ujian' => $data['tahun'],
            'jenis' => $data['jenis'],
            'file' => $data['file'],
        );
        $this->db->insert('soal',$tambah_kategori);
    }

    public function download($id){
        $query = $this->db->get_where('soal',array('id_soal'=>$id));
        return $query->row_array();
    }

    // function getRows($params = array()){
    //     $this->db->select('*');
    //     $this->db->from('soal');
    //     $this->db->where('*');
    //     $this->db->order_by('created','desc');
    //     if(array_key_exists('id_soal',$params) && !empty($params['id_soal'])){
    //         $this->db->where('id_soal',$params['id_soal']);
    //         //get records
    //         $query = $this->db->get();
    //         $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
    //     }else{
    //         //set start and limit
    //         if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
    //             $this->db->limit($params['limit'],$params['start']);
    //         }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
    //             $this->db->limit($params['limit']);
    //         }
    //         //get records
    //         $query = $this->db->get();
    //         $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
    //     }
    //     //return fetched data
    //     return $result;
    // }
}