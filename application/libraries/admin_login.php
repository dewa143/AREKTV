<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_login  
{
	protected $ci;
	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('M_login');
	}

	public function login($username,$password)
	{
		$cek=$this->ci->M_login->login($username,$password);
		if($cek){
			$username = $cek ->username;
			$nama_admin =$cek ->nama_admin;
			$level =$cek ->level;
			//sesion
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('nama_admin',$nama_admin);
			$this->ci->session->set_userdata('level',$level);
			redirect('admin/dashboard');
		}else {
			$this->ci->session->set_flashdata('pesan','Username atau Password Salah');
			redirect('admin/login');
		}

	}
	public function cek_login()
	{
		if($this->ci->session->userdata('username')=="") {
		$this->ci->session->set_flashdata('pesan','Anda belum Login');
		redirect('admin/login');
		}
	}
	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('nama_admin');
		$this->ci->session->unset_userdata('level');
		$this->ci->session->set_flashdata('pesan','Anda telah Logout');
		redirect('admin/login');
		}


}
