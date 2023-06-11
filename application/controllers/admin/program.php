<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class program extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_program');
    }


	public function index()
	{ 
        $data = array(
			'title' => 'program',
            'program' => $this->M_program->list(),
			'isi'   => 'backend/kelola_web/program'
		);
		$this->load->view('backend/kelola_web/layouts/app',$data,false);
    
	}

    public function add()
	{ 
        $data = array(
			'nama_program'=>$this->input->post('nama_program'),
			'sesi'=> $this-> input->post('sesi')
			);
		$this->M_program->add($data);
		$this->session->set_flashdata('pesan','Data Berhasil Ditambah');
        redirect('admin/program');
    }

    public function edit($id_program)
	{ 
        $data = array(
			'id_program' => $id_program,
            'nama_program' => $this->input->post('nama_program'),
			'sesi'=> $this-> input->post('sesi')
		);
        $this->M_program->edit($data);
		$this->session->set_flashdata('pesan','Data Berhasil Diedit');
        redirect('admin/program');
	}

    public function delete($id_program)
	{ 
        $data = array(
			'id_program' => $id_program

		);
        $this->M_program->delete($data);
		$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/program');
	}

}
