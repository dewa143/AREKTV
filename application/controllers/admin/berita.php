<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
        $this->load->model('M_kategori');
    }


	public function index()
	{
        $data = array(
			'title' => 'Arek TV',
            'berita' => $this->M_berita->list(),
			'isi'   => 'backend/berita/list'
		);
		$this->load->view('backend/layouts/app',$data,false);
	}

    public function add()
	{
        $this->form_validation->set_rules('judul_berita','Judul Berita', 'required');
        $this->form_validation->set_rules('id_kategori','Kategori', 'required');
        $this->form_validation->set_rules('reporter','Reporter', 'required');
		$this->form_validation->set_rules('sumber_gambar','Sumber Gambar', 'required');
		$this->form_validation->set_rules('keterangan','Keterangan', 'required',array('required'=>'%s Harus diisi'));

        if ($this->form_validation->run() == true) {
            $config['upload_path'] ='./gambar_berita/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('gambar'))
                {

                        $data = array(
                            'title' => 'Tambah Berita',
                            'error' => $this->upload->display_errors(),
                            'kategori' => $this->M_kategori->list(),
                            'isi'   => 'backend/berita/add'
                        );
                        $this->load->view('backend/layouts/app',$data,FALSE);
                }
                else
                {
                    $upload_data             = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './gambar_berita/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'judul_berita' => $this->input->post('judul_berita'),
                        'slug_berita' =>url_title($this->input->post('judul_berita'),'dash',TRUE),
                        'id_kategori'=> $this->input->post('id_kategori'),
                        'tgl' => date('Y-m-d'),
                        'reporter'=> $this->input->post('reporter'),
					    'sumber_gambar' =>$this->input->post('sumber_gambar'),
                        'gambar'=> $upload_data['uploads']['file_name'],
                        'keterangan'=> $this->input->post('keterangan')
                    );

                $this->M_berita->add($data);
                $this->session->set_flashdata('pesan', 'berita Berhasil diTambah');
                redirect('admin/berita');
                }
            

        }

        $data = array(
            'title' => 'Tambah berita',
            'kategori' => $this->M_kategori->list(),
            'isi'   => 'backend/berita/add'
        );
        $this->load->view('backend/layouts/app',$data,FALSE);
        
        
    }

    public function edit($id_berita){

        $this->form_validation->set_rules('judul_berita','Judul Berita', 'required');
        $this->form_validation->set_rules('id_kategori','Kategori', 'required');
        $this->form_validation->set_rules('reporter','Reporter', 'required');
		$this->form_validation->set_rules('sumber_gambar','Sumber Gambar', 'required');
        $this->form_validation->set_rules('keterangan','Keterangan', 'required',array('required'=>'%s Harus diisi'));

        if ($this->form_validation->run() == true) {
            $config['upload_path'] ='./gambar_berita/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
                
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('gambar'))
                {

                        $data = array(
                            'title' => 'Edit Berita',
                            'error' => $this->upload->display_errors(),
                            'kategori' => $this->M_kategori->list(),
                            'berita' => $this-> M_berita-> detail($id_berita),
                            
                            'isi'   => 'backend/berita/edit'
                        );
                        $this->load->view('backend/layouts/app',$data,FALSE);
                       
                }
                else
                {
                    $upload_data             = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './gambar_berita/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $berita=$this->M_berita->detail($id_berita);
                    if ($berita->gambar !=""){
                        unlink('./gambar_berita/'.$berita->gambar);
                    }
                    $data = array (
                        'id_berita' => $id_berita,
                        'judul_berita' => $this->input->post('judul_berita'),
                        'slug_berita' =>url_title($this->input->post('judul_berita'),'dash',TRUE),
                        'id_kategori'=> $this->input->post('id_kategori'),
                
                        'reporter'=> $this->input->post('reporter'),
						'sumber_gambar' =>$this->input->post('sumber_gambar'),
                        'gambar'=> $upload_data['uploads']['file_name'],
                        'keterangan'=> $this->input->post('keterangan')
                        
                    );

                $this->M_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil direpost');
                
                redirect('admin/berita');
                }
                $data = array (
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug_berita' =>url_title($this->input->post('judul_berita'),'dash',TRUE),
                    'id_kategori'=> $this->input->post('id_kategori'),
            
                    'reporter'=> $this->input->post('reporter'),
                    'sumber_gambar' =>$this->input->post('sumber_gambar'),
                    'keterangan'=> $this->input->post('keterangan')
                    
                );

                $this->M_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita Berhasil direpost');
            
            redirect('admin/berita');

        }

        $data = array(
            'title' => 'Edit Berita',
            'kategori' => $this->M_kategori->list(),
            'berita' => $this->M_berita->detail($id_berita),
            'isi'   => 'backend/berita/edit'
        );
        $this->load->view('backend/layouts/app',$data,FALSE);


    }
	
	

    public function delete($id_berita)
	{ 
        //menghapus data lama
        $berita=$this->M_berita->detail($id_berita);
                    if ($berita->gambar !=""){
                        unlink('./gambar_berita/'.$berita->gambar);
        }

        $data = array('id_berita' => $id_berita);
            $this->M_berita->delete($data);
		    $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
            redirect('admin/berita');
	}

}
