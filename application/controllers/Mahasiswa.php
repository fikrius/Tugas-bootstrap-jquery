<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('mahasiswa_model');
	}

	public function index(){
		$data['mahasiswa'] = $this->mahasiswa_model->get_all_mahasiswa();
		$this->load->view('pages/beranda', $data);
	}

	public function view($halaman = 'beranda'){
		if(!file_exists(APPPATH."views/pages/".$halaman.'.php')){
			show_404();
		}

		$this->load->view('pages/'.$halaman);
		$this->load->view('templates/footer');
	}



	
}
