<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		}
	
	
	public function index()
	{ 
        $data = array(
			'title' => 'Arek TV',
			'jumlah_berita' => $this->M_dashboard->getJumlahBerita(),
			'isi'   => 'backend/dashboard'
		);
		$this->load->view('backend/layouts/app',$data,false);
    
	}
}
