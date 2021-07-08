<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
	function __construct(){
		parent::__construct();
		check_not_login();
        $this->load->model('soal_m','soal');
        $this->load->model('kategori_m','kategori');
        $this->load->helper('url');
        
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
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|pdf';
            $config['max_size']             = 2048;
            $config['file_name']        = 'item-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload',$config);
            if (@_FILES['file']['name'] != null){
                if($this->upload->do_upload('file')){
                    $inputan['file'] = $this->upload->data('file_name');
                    $this->soal->tambah_soal($inputan);										
                        echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
                        echo "<script>window.location='".site_url('soal')."'; </script>";
                }
            } else {
                $post['file'] = null ;
                $inputan['file'] = $this->upload->data('file_name');
                    $this->soal->tambah_soal($inputan);										
                        echo "<script> alert('Data Berhasil Ditambahkan'); </script>";		
                        echo "<script>window.location='".site_url('soal')."'; </script>";
            }
            
           
        }	else if(isset($_POST['edit'])){ 
			$inputan = $this->input->post(null, TRUE);
            $this->soal->edit($inputan);										
            echo "<script> alert('Data Berhasil Diubah'); </script>";		
            echo "<script>window.location='".site_url('soal')."'; </script>";	
        }
    }

    public function download($id_soal){
        $this->load->helper('download');
        $fileinfo = $this->files_model->download($id_soal);
        $file = 'upload/'.$fileinfo['filename'];
        force_download($file, NULL);
    }



    // public function download($id){
    //     if(!empty($id)){
    //         //load download helper
    //         $this->load->helper('download');
            
    //         //get file info from database
    //         $fileInfo = $this->file->getRows(array('id_soal' => $id_soal));
            
    //         //file path
    //         $file = 'upload/'.$fileInfo['file_name'];
            
    //         //download file from directory
    //         force_download($file, NULL);
    //     }
    // }

    // public function get_all_data()
    //     {
    //     $data['result'] = $this->model->get_data(); // 
    //     $this->load->view('soal',$data); //past the data to the view
    //     }
}