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

		$namamatkul	= $this->input->post('namamatkul');
		$semester	= $this->input->post('semester');
		$tanggal	= $this->input->post('tanggal');
		$dosen		= $this->input->post('dosen');
		$tahun		= $this->input->post('tahun');
		$kategori	= $this->input->post('kategori');
		$file		= $_FILES['file'];
		if ($file=''){}else{
			$config['upload_path']	= './views/file';
			$config['allow_types']	= 'pdf|jpg|png|doc';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('file')){
				echo"upload gagal"; die();
			}else{
				$file=$this->upload->data('file_name');
			}
			
			$data = array(
				'namamatkul'	=> $namamatkul,
				'semester'		=> $semester,
				'tanggal'		=> $tanggal,
				'dosen'			=> $dosen,
				'tahun'			=> $tahun,
				'kategori'		=> $kategori,
				'file'			=> $file,
			);
		}

		// $this->soal_m->input_data($data, 'soal');
		// redirect('tambah_soal/index');

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
