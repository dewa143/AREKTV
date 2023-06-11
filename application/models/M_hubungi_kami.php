<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hubungi_kami extends CI_Model 
{
    public function list(){
        $this->db->select('*');
        $this->db->from('hubungi_kami');
        $this->db->order_by('id_hubungi_kami','DESC');
        return $this->db->get()->result();
    }
	public function balas_email($data){
        $this->db->where('id_hubungi_kami', $data['id_hubungi_kami']);
    
    }
	
	public function delete($data){
        $this->db->where('id_hubungi_kami', $data['id_hubungi_kami']);
        $this->db->delete('hubungi_kami', $data);
    }

    

}
