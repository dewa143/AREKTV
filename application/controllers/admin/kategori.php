<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kategori');
    }


	public function index()
	{ 
        $data = array(
			'title' => 'Kategori',
            'kategori' => $this->M_kategori->list(),
			'isi'   => 'backend/kelola_web/kategori'
		);
		$this->load->view('backend/kelola_web/layouts/app',$data,false);
    
	}

    public function add()
	{ 
        $data = array(
			'nama_kategori'=>$this->input->post('nama_kategori')
			);
		$this->M_kategori->add($data);
		$this->session->set_flashdata('pesan','Data Berhasil Ditambah');
        redirect('admin/kategori');
    }

    public function edit($id_kategori)
	{ 
        $data = array(
			'id_kategori' => $id_kategori,
            'nama_kategori' => $this->input->post('nama_kategori')
		);
        $this->M_kategori->edit($data);
		$this->session->set_flashdata('pesan','Data Berhasil Diedit');
        redirect('admin/kategori');
	}

    public function delete($id_kategori)
	{ 
        $data = array(
			'id_kategori' => $id_kategori

		);
        $this->M_kategori->delete($data);
		$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/kategori');
	}

}
