<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_model extends CI_Model{
    private $table = 'soal';

//validasi form, method ini akan mengembailkan data berupa rules validasi form
    public function rules(){
        return [
            [
                'field' => 'matkul',  //samakan dengan atribute name pada tags input
                'label' => 'Mata Kuliah',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'semester',
                'label' => 'Semester',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tgl_upload',
                'label' => 'Tanggal Upload',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'dosen',
                'label' => 'Dosen Pengampu',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'thn_ujian',
                'label' => 'Tahun Ujian',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'kategori',
                'label' => 'Kategori',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'file_soal',
                'label' => 'File Soal',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data soal berdasarkan id soal
    public function getById($id){
        return $this->db->get_where($this->table, ["id" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from soal where Id='$id'
    }
    //menampilkan semua data soal
    public function getAll(){
        $this->db->from($this->table);
        $this->db->order_by("id", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }
    //menyimpan data mahasiswa
    public function save(){
        $data = array(
            "matkul" => $this->input->post('matkul'),
            "semester" => $this->input->post('semester'),
            "tgl_upload" => $this->input->post('tgl_upload'),
            "dosen" => $this->input->post('dosen'),
            "thn_ujian" => $this->input->post('thn_ujian'),
            "kategori" => $this->input->post('kategori'),
            "file_soal" => $this->input->post('file_soal')
        );
        return $this->db->insert($this->table, $data);
    }
    //edit data mahasiswa
    public function update(){
        $data = array(
            "matkul" => $this->input->post('matkul'),
            "semester" => $this->input->post('semester'),
            "tgl_upload" => $this->input->post('tgl_upload'),
            "dosen" => $this->input->post('dosen'),
            "thn_ujian" => $this->input->post('thn_ujian'),
            "kategori" => $this->input->post('kategori'),
            "file_soal" => $this->input->post('file_soal')
        );
        return $this->db->update($this->table, $data, array('id' => $this->input->post('id')));
    }
    //hapus data mahasiswa
    public function delete($id){
        return $this->db->delete($this->table, array("id" => $id));
    }
   
<<<<<<< HEAD
   public function download($id){
  $query = $this->db->download($this->table,array('id'=>$id));
  return $query->row_array();
 }

//     public function getRows($params = array()){
//     $this->db->select('*');
//     $this->db->from('soal');
//     if(array_key_exists('id',$params) && !empty($params['id'])){
//         $this->db->where('id',$params['id']);
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

=======
>>>>>>> fb0388402c3653610e05c303cb4d2e049ce2225e
}