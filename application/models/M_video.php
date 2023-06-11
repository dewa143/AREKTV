<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model 
{
    public function list(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->join('biro','biro.id_biro = video.id_biro','left' );
        $this->db->order_by('id_video','DESC');
        return $this->db->get()->result();
    }

    public function view($id_video){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('id_video', $id_video);
        $this->db->join('biro','biro.id_biro = video.id_biro','left' );
        return $this->db->get()->row();
    }

    public function add($data){
        $this->db->insert('video', $data);
    }

    public function edit($data){
        $this->db->where('id_video', $data['id_video']);
        $this->db->update('video', $data);
    }
    
    public function delete($data){
        $this->db->where('id_video', $data['id_video']);
        $this->db->delete('video', $data);
    }

}
