<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model 
{

 public function berita($limit,$start){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        $this->db->order_by('id_berita','DESC');
		$this->db->limit($limit,$start);
        return $this->db->get()->result();
    }

	public function total_berita()
	{
		$this->db->select('*');
        $this->db->from('berita');
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        $this->db->order_by('id_berita','DESC');
		return $this->db->get()->result();
	}

	public function detail_berita($slug_berita)
	{
		$this->db->select('*');
        $this->db->from('berita');
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        $this->db->where('slug_berita',$slug_berita);
		return $this->db->get()->row();
	}

	
	public function berita_terbaru(){
	
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
		$this->db->order_by('id_berita','DESC');
		$this->db->limit(5);
		return $this->db->get()->result();
	}

	public function data_kategori(){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->order_by('id_kategori','DESC');
        return $this->db->get()->result();
    }
	public function kategori($id_kategori){
        $this->db->select('*');
        $this->db->from('kategori');
        $this->db->where('id_kategori',$id_kategori);
        return $this->db->get()->row();
    }
    public function total_kategori($id_kategori){
        $this->db->select('*');
        $this->db->from('berita');
		$this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        $this->db->where('berita.id_kategori',$id_kategori);
		return $this->db->get()->result();
	}
		
	public function program(){
		$this->db->select('*');
		$this->db->from('program');
		$this->db->order_by('id_program','DESC');
		return $this->db->get()->result();

	}
		//Video-------------------------------------------------
	public function video($limit,$start){
		$this->db->select('*');
		$this->db->from('video');
		$this->db->join('biro','biro.id_biro = video.id_biro','left' );
		$this->db->order_by('id_video','DESC');
		$this->db->limit($limit,$start);
		return $this->db->get()->result();
	}

	public function total_video()
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->join('biro','biro.id_biro = video.id_biro','left' );
		$this->db->order_by('id_video','DESC');
		return $this->db->get()->result();
	}

	public function view($slug_video)
	{
		$this->db->select('*');
		$this->db->from('video');
		$this->db->join('biro','biro.id_biro = video.id_biro','left' );
		$this->db->where('slug_video',$slug_video);
		return $this->db->get()->row();
	}

	public function video_terbaru(){
	
		$this->db->select('*');
		$this->db->from('video');
		$this->db->join('biro','biro.id_biro = video.id_biro','left' );
		$this->db->order_by('id_video','DESC');
		$this->db->limit(5);
		return $this->db->get()->result();
	}


	public function data_biro(){
		$this->db->select('*');
		$this->db->from('biro');
		$this->db->order_by('id_biro','DESC');
		return $this->db->get()->result();
	}	


	public function biro($id_biro){
		$this->db->select('*');
		$this->db->from('biro');
		$this->db->order_by('id_biro',$id_biro);
		return $this->db->get()->row();

	}

	public function total_biro($id_biro){
        $this->db->select('*');
        $this->db->from('video');
		$this->db->join('biro','biro.id_biro = video.id_biro','left' );
        $this->db->where('video.id_biro',$id_biro);
		return $this->db->get()->result();
	}



	public function kirim_pesan($data){
        $this->db->insert('hubungi_kami',$data);
    }

	public function about(){
		$this->db->select('*');
		$this->db->from('about');
		$this->db->order_by('id_about','DESC');
		return $this->db->get()->result();
	}	

	/*public function kategori_berita($limit,$start)
	{
		$this->db->select('*');
        $this->db->from('kategori');
		$this->db->join('berita','berita.id_berita = kategori.id_berita','left' );
        $this->db->order_by('id_kategori','DESC');
		$this->db->limit($limit,$start);
		return $this->db->get()->result();
	}
	public function total_kategori_berita()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->join('berita','berita.id_berita = kategori.id_berita','left' );
        $this->db->order_by('id_kategori','DESC');
		return $this->db->get()->result();
   }*/
}
