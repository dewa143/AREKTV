<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('M_hubungi_kami');
}


public function index()
{ 
	$data = array(
		'title' => 'contact',
		'hubungi_kami' => $this->M_hubungi_kami->list(),
		'isi'   => 'backend/kelola_web/contact'
	);
	$this->load->view('backend/kelola_web/layouts/app',$data,false);

}

public function balas_email($id_hubungi_kami)
{
	$data = array(
		'id_hubungi_kami' => $id_hubungi_kami,
		
	);
	$this->m_hubungi_kami->balas_email($data);
	$this->session->set_flashdata('pesan','Data Berhasil Diedit');
	redirect('admin/contact');
}

public function balas_email_aksi()
{
	$to_email = $this->input->post('email');
	$subject = $this->input->post('subject');
	$pesan = $this->input->post('pesan');
	$config = array(
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'protocol' => 'smtp',
    	'smtp_host' => 'ssl://smtp.googlemail.com',
    	'smtp_port' => 465,
    	'smtp_user' => 'xxxxxx',
    	'smtp_pass' => 'xxxxxx',
		'crlf'		=>"\r\n",
		'newline'	=>"\r\n"
	);
	$this->load->library('email', $config);
	$this->email->from("xxxxxxx");
	$this->email->to($to_email);
	$this->email->subject($subject);
	$this->email->message($pesan);
	if($this->email->send())
	{
		$this->session->set_flashdata('pesan','Email Berhasil dikirim');
		redirect('admin/contact');
	}else{
		$this->session->set_flashdata('pesan','Email Gagal dikirim');
		redirect('admin/contact');
	}
	
}


public function delete($id_hubungi_kami)
	{ 
        $data = array(
			'id_hubungi_kami' => $id_hubungi_kami

		);
        $this->M_hubungi_kami->delete($data);
		$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
        redirect('admin/contact');
	}

}
