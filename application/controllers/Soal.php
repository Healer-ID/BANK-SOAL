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
        $query = $this->soal->get();
		$data = array(
			'judul' => 'Soal',
			'row' => $query->result(),
		);
		$this->template->load('template', 'soal/tambah_soal', $data);
    }
   
}
