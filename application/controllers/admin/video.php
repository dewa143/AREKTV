<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class video extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_video');
		$this->load->model('M_biro');
    }


	public function index()
	{ 
        $data = array(
			'title' => 'video',
            'video' => $this->M_video->list(),
			'isi'   => 'backend/kelola_web/video/list'
		);
		$this->load->view('backend/kelola_web/layouts/app',$data,false);
    
	}
 public function add()
	{
        $this->form_validation->set_rules('judul_video','Judul Video', 'required');
        $this->form_validation->set_rules('id_biro','Biro', 'required');
		$this->form_validation->set_rules('link_video','Link Video', 'required',array('required'=>'%s Harus diisi'));

        if ($this->form_validation->run() == true) {
            $config['upload_path'] ='./thumbnail_video/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('thumbnail'))
                {

                        $data = array(
                            'title' => 'Tambah video',
                            'error' => $this->upload->display_errors(),
                            'biro' => $this->M_biro->list(),
                            'isi'   => 'backend/kelola_web/video/add'
                        );
                        $this->load->view('backend/kelola_web/layouts/app',$data,FALSE);
                }
                else
                {
                    $upload_data             = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './thumbnail_video/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $data = array (
                        'judul_video' => $this->input->post('judul_video'),
                        'slug_video' =>url_title($this->input->post('judul_video'),'dash',TRUE),
                        'id_biro'=> $this->input->post('id_biro'),
                        'tgl' => date('Y-m-d'),
                        'thumbnail'=> $upload_data['uploads']['file_name'],
                        'link_video'=> $this->input->post('link_video')
                    );

                $this->M_video->add($data);
                $this->session->set_flashdata('pesan', 'video Berhasil diTambah');
                redirect('admin/video');
                }
            

        }

        $data = array(
            'title' => 'Tambah video',
            'biro' => $this->M_biro->list(),
            'isi'   => 'backend/kelola_web/video/add'
        );
        $this->load->view('backend/kelola_web/layouts/app',$data,FALSE);
        
        
    }

   public function edit($id_video){

	$this->form_validation->set_rules('judul_video','Judul Video', 'required');
	$this->form_validation->set_rules('id_biro','Biro', 'required');
	$this->form_validation->set_rules('link_video','Link Video', 'required',array('required'=>'%s Harus diisi'));

        if ($this->form_validation->run() == true) {
            $config['upload_path'] ='./thumbnail_video/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;
                
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('thumbnail'))
                {

                        $data = array(
                            'title' => 'Edit video',
                            'error' => $this->upload->display_errors(),
                            'biro' => $this->M_biro->list(),
                            'video' => $this-> M_video-> view($id_video),
                            
                            'isi'   => 'backend/kelola_web/video/edit'
                        );
                        $this->load->view('backend/kelola_web/layouts/app',$data,FALSE);
                       
                }
                else
                {
                    $upload_data             = array('uploads'=> $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './thumbnail_video/'.$upload_data['uploads']['file_name'];
                    $this->load->library('image_lib', $config);

                    $video=$this->M_video->view($id_video);
                    if ($video->thumbnail !=""){
                        unlink('./thumbnail_video/'.$video->thumbnail);
                    }
                    $data = array (
						'id_video' => $id_video,
                        'judul_video' => $this->input->post('judul_video'),
                        'slug_video' =>url_title($this->input->post('judul_video'),'dash',TRUE),
                        'id_biro'=> $this->input->post('id_biro'),
                
                        'thumbnail'=> $upload_data['uploads']['file_name'],
                        'link_video'=> $this->input->post('link_video')
                        
                    );

                $this->M_video->edit($data);
                $this->session->set_flashdata('pesan', 'video Berhasil direpost');
                
                redirect('admin/video');
                }
                $data = array (
					'id_video' => $id_video,
					'judul_video' => $this->input->post('judul_video'),
					'slug_video' =>url_title($this->input->post('judul_video'),'dash',TRUE),
					'id_biro'=> $this->input->post('id_biro'),
					
					'link_video'=> $this->input->post('link_video')
                    
                );

                $this->M_video->edit($data);
                $this->session->set_flashdata('pesan', 'video Berhasil direpost');
            
            redirect('admin/video');

        }

        $data = array(
            'title' => 'Edit video',
            'biro' => $this->M_biro->list(),
            'video' => $this->M_video->view($id_video),
            'isi'   => 'backend/kelola_web/video/edit'
        );
        $this->load->view('backend/kelola_web/layouts/app',$data,FALSE);


    }
	
	

    public function delete($id_video)
	{ 
        //menghapus data lama
        $video=$this->M_video->view($id_video);
                    if ($video->thumbnail !=""){
                        unlink('./thumbnail_video/'.$video->thumbnail);
        }

        $data = array('id_video' => $id_video);
            $this->M_video->delete($data);
		    $this->session->set_flashdata('pesan','Data Berhasil Dihapus');
            redirect('admin/video');
	}
}

