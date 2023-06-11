<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biro extends CI_Model 
{
    public function list(){
        $this->db->select('*');
        $this->db->from('biro');
        $this->db->order_by('id_biro','DESC');
        return $this->db->get()->result();
    }
    public function add($data){
        $this->db->insert('biro',$data);
    }

    public function edit($data){
        $this->db->where('id_biro', $data['id_biro']);
        $this->db->update('biro', $data);
    }
    
    public function delete($data){
        $this->db->where('id_biro', $data['id_biro']);
        $this->db->delete('biro', $data);
    }

}
