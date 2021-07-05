<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_m extends CI_Model
{
    public function get()
    {
        // $this->db->select(
        // 'soal.id_soal as id_soal',
        // 'soal.tanggal_upload as tanggal_upload',
        // 'soal.nama_dosen as nama_dosen',
        // 'soal.tahun_ujian as tahun_ujian',
        
        // 'user.nama_user as nama',

        // 'kategori_soal.nama_matkul as matkul',
        // 'kategori_soal.semester as semester',
        // );
        
        $this->db->from('soal');
        $this->db->join('user','user.id_user = soal.id_user');   
        $this->db->join('kategori_soal','kategori_soal.id_kategori = soal.id_kategori');  
        $query = $this->db->get();
        return $query;
    }
   
}