<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('soal_m','soal');
        $this->load->model('kategori_m','kategori');
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
        $query = $this->kategori->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
		$this->template->load('template', 'soal/tambah_soal', $data);
    }
    public function process(){
        if(isset($_POST['add'])){							
			$inputan = $this->input->post(null, TRUE);
            $this->soal->tambah_soal($inputan);										
				echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
				echo "<script>window.location='".site_url('soal')."'; </script>";
        }	else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);
            $this->soal->edit($inputan);										
            echo "<script> alert('Data Berhasil Diubah'); </script>";		
            echo "<script>window.location='".site_url('soal')."'; </script>";	
        }
    }
}