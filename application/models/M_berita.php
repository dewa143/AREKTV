<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Berita extends CI_Model 
{
    public function list(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        $this->db->order_by('id_berita','DESC');
        return $this->db->get()->result();
    }

    public function detail($id_berita){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $id_berita);
        $this->db->join('kategori','kategori.id_kategori = berita.id_kategori','left' );
        return $this->db->get()->row();
    }

    public function add($data){
        $this->db->insert('berita', $data);
    }

    public function edit($data){
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->update('berita', $data);
    }
    
    public function delete($data){
        $this->db->where('id_berita', $data['id_berita']);
        $this->db->delete('berita', $data);
    }

}
