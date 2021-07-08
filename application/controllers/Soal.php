<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Soal_model'); //load model soal 
	}

	public function index()
	{
     $data["title"] = "List Data Soal";
	 //ambil fungsi getAll untuk menampilkan semua data mahasiswa
	 $data["data_soal"] = $this->Soal_model->getAll();
	 //load view header.php pada folder views/templates
	 $this->load->view('templates/header', $data);
	 $this->load->view('templates/menu');
	 //load view index.php pada folder views/soal
	 $this->load->view('soal/index', $data);
	 $this->load->view('templates/footer');
	}

    //method add digunakan untuk menampilkan form tambah data mahasiswa
    public function tambah(){
        $soal = $this->Soal_model; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($soal->rules()); //menerapkan rules validasi pada mahasiswa_model
        //kondisi jika semua kolom telah divalidasi, maka akan menjalankan method save pada mahasiswa_model
        if ($validation->run()) {
            $soal->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Soal berhasil disimpan. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("soal");
        }
        $data["title"] = "Tambah Data Soal";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('soal/tambah', $data);
        $this->load->view('templates/footer');
    }

	public function edit($id = null){
        if (!isset($id)) redirect('soal');

        $soal = $this->Soal_model;
        $validation = $this->form_validation;
        $validation->set_rules($soal->rules());

        if ($validation->run()) {
            $soal->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Soal berhasil disimpan.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
            redirect("soal");
        }
        $data["title"] = "Edit Data Soal";
        $data["data_soal"] = $soal->getById($id);
        if (!$data["data_soal"]) show_404();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu');
        $this->load->view('soal/edit', $data);
        $this->load->view('templates/footer');
    }
	public function delete(){
        $id = $this->input->get('id');
        if (!isset($id)) show_404();
        $this->Soal_model->delete($id);
        $msg['success'] = true;
        $this->session->set_flashdata('message', '
		<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Soal berhasil dihapus.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button></div>');
        $this->output->set_output(json_encode($msg));

    
    }
}