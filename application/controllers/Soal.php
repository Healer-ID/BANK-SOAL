<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('soal_m','soal');
        
		// check_admin();
        // $this->load->model('kategori_m');
	}

	public function index()
	{
        $query = $this->soal->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
		$this->template->load('template', 'soal/soal', $data);
	}
    public function tambah_Soal(){

			$config['upload_path']	= './views/file';
			$config['allow_types']	= 'pdf|jpg|png|doc';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile')){
				echo "gagal memuat";

			}else{
				$file = $this->upload->data();
				$file = $file['file_name'];
				$namamatkul	= $this->input->post('namamatkul', TRUE);
				$semester	= $this->input->post('semester', TRUE);
				$tanggal	= $this->input->post('tanggal', TRUE);
				$dosen		= $this->input->post('dosen', TRUE);
				$tahun		= $this->input->post('tahun', TRUE);
				$kategori	= $this->input->post('kategori', TRUE);

				$data = array(
					'namamatkul'	=> $namamatkul,
					'semester'		=> $semester,
					'tanggal'		=> $tanggal_upload,
					'dosen'			=> $nama_dosen,
					'tahun'			=> $tahun_ujian,
					'kategori'		=> $id_kategori,
					'file'			=> $file,
				);
				
				$this->db->insert('soal', $data);
				$this->session->set_flashdata('pesan', '<div
				class="alert alert-succes" role="alert"berhasil</div> ');
				redirect('soal');
			}

        $query = $this->soal->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
		$this->template->load('template', 'soal/tambah_soal', $data);
    }
}
// 	public function input_soal(){
		
   
// }
