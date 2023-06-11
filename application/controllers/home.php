<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
		
    }
	
	/*public function index()
	{ 
        $data = array(
			'title' => 'Arek TV',
			'isi'   => 'frontend/home'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}*/

	public function index()
	{ 
		
        $data = array(
			'title' => 'Arek TV',
			'berita_terbaru' => $this-> m_home->berita_terbaru(),
		
 			'program' => $this-> m_home->program(),
			'isi'   => 'frontend/home'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}

	

	public function video()
	{ 
		
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/video');
		$config['total_rows'] = count($this->M_home->total_video());
		$config['per_page'] = 8;
		$config['uri_segmen'] =3;
		//start dan limit
		$limit= $config['per_page'];
		$start= ($this->uri->segment(3))? ($$this->uri->segment(3)): 0;
		//---
		$config['first_link'] = 'first';
		$config['last_link'] = 'last';
		$config['next_link'] = 'next';
		$config['prev_link'] = 'prev';
		$config['full_tag_open'] = '<div class="pagination d-flex justify-content-center align-items-center">';
		$config['num_tag_open'] ='<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
	

        
		$data = array(
			'pagination' => $this->pagination->create_links(),
			'video'	=> $this->m_home->video($limit,$start),
			'title' => 'Video',
			'isi'   => 'frontend/video'
		);
		$this->load->view('frontend/layouts/app',$data,false);
	}

	public function view($slug_video){
		$data = array(
			'title' => 'Arek TV',
			'video'	=> $this->m_home->view($slug_video),
			'video_terbaru' => $this-> m_home->video_terbaru(),
			'isi'   => 'frontend/view'
		);
		$this->load->view('frontend/layouts/app',$data,false);

	}

	public function biro($id_biro)
	{ 
		$biro = $this->m_home->biro($id_biro);
        $data = array(
			'title' => 'Kategori Berita',
			'video'	=> $this->m_home->total_biro($id_biro),
			'isi'   => 'frontend/biro_video'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}


	public function contact()
	{ 
		
        $data = array(
			'title' => 'Arek TV',
			'isi'   => 'frontend/contact'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}

	public function about()
	{ 
		$data = array(
			'title' => 'Arek TV ',
        
			'isi'   => 'frontend/about'
		);
		$this->load->view('frontend/layouts/app',$data,false);



        $data = array(
			'title' => 'Arek TV',
			
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}



	public function berita()
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/berita');
		$config['total_rows'] = count($this->M_home->total_berita());
		$config['per_page'] = 8;
		$config['uri_segmen'] =3;
		//start dan limit
		$limit= $config['per_page'];
		$start= ($this->uri->segment(3))? ($$this->uri->segment(3)): 0;
		//---
		$config['first_link'] = 'first';
		$config['last_link'] = 'last';
		$config['next_link'] = 'next';
		$config['prev_link'] = 'prev';
		$config['full_tag_open'] = '<div class="pagination d-flex justify-content-center align-items-center">';
		$config['num_tag_open'] ='<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
	

        
		$data = array(
			'pagination' => $this->pagination->create_links(),
			'berita'	=> $this->m_home->berita($limit,$start),
			'title' => 'Berita',
			'isi'   => 'frontend/berita'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}
	public function detail_berita($slug_berita){
		$data = array(
			'title' => 'Arek TV',
			'berita'	=> $this->m_home->detail_berita($slug_berita),
			'berita_terbaru' => $this-> m_home->berita_terbaru(),
			'isi'   => 'frontend/detail_berita'
		);
		$this->load->view('frontend/layouts/app',$data,false);

	}

public function kategori($id_kategori)
	{ 
		$kategori = $this->m_home->kategori($id_kategori);
        $data = array(
			'title' => 'Kategori Berita',
			'berita'	=> $this->m_home->total_kategori($id_kategori),
			'isi'   => 'frontend/kategori_berita'
		);
		$this->load->view('frontend/layouts/app',$data,false);
    
	}

	public function kirim_pesan()
{	 
	$data = array(
		'nama'=>$this->input->post('nama'),
		'email'=>$this->input->post('email'),
		'subject'=>$this->input->post('subject'),
		'pesan'=>$this->input->post('pesan')
		);
	$this->M_home->kirim_pesan($data);
	$this->session->set_flashdata('pesan','Pesan Anda telah terkirim. Terima kasih telah menghubungi kami.');
	redirect('home/contact');
}

	/*public function kategori_berita(){
		$this->load->library('pagination');
		$config['base_url'] = base_url('home/kategori_berita');
		$config['total_rows'] = count($this->M_home->total_kategori_berita());
		$config['per_page'] = 8;
		$config['uri_segmen'] =3;
		//start dan limit
		$limit= $config['per_page'];
		$start= ($this->uri->segment(3))? ($$this->uri->segment(3)): 0;
		//---
		$config['first_link'] = 'first';
		$config['last_link'] = 'last';
		$config['next_link'] = 'next';
		$config['prev_link'] = 'prev';
		$config['full_tag_open'] = '<div class="pagination d-flex justify-content-center align-items-center">';
		$config['num_tag_open'] ='<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</div>';
		$this->pagination->initialize($config);
		
			$data = array(
				'pagination' => $this->pagination->create_links(),
				'berita'	=> $this->m_home->kategori_berita($limit,$start),
				'title' => 'Kategori Berita',
				'isi'   => 'frontend/kategori_berita'
			);
			$this->load->view('frontend/layouts/app',$data,false);
	}*/

}

