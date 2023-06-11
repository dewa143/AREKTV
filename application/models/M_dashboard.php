<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model 
{
	public function getJumlahBerita()
	{
		$this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id_berita','DESC');
		return $this->db->count_all('berita'); // Ganti 'nama_tabel_berita' dengan nama tabel berita Anda
	}
}
