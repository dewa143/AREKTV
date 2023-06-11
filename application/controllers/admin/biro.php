<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biro extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_biro');
    }


	public function index()
	{ 
        $data = array(
			'title' => 'biro',
            'biro' => $this->M_biro->list(),
			'isi'   => 'backend/kelola_web/biro'
		);
		$this->load->view('backend/kelola_web/layouts/app',$data,false);
    
	}

    public function add()
	{ 
        $data = array(
			'biro'=>$this->input->post('biro')
			);
		$this->M_biro->add($data);
		$this->session->set_flashdata('pesan','Data Berhasil Ditambah');
        redirect('admin/biro');
    }

    public function edit($id_biro)
	{ 
        $data = array(
			'id_biro' => $id_biro,
            'biro' => $this->input->post('biro')
		);
        $this->M_biro->edit($data);
		$this->session->set_flashdata('pesan','Data Berhasil Diedit');
        redirect('admin/biro');
	}

    public function delete($id_biro)
	{ 
        $data = array(
			'id_biro' => $id_biro

		);
        $this->M_biro->delete($data);
		$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/biro');
	}

}
