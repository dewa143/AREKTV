<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_program extends CI_Model 
{
    public function list(){
        $this->db->select('*');
        $this->db->from('program');
        $this->db->order_by('id_program','DESC');
        return $this->db->get()->result();
    }
    public function add($data){
        $this->db->insert('program',$data);
    }

    public function edit($data){
        $this->db->where('id_program', $data['id_program']);
        $this->db->update('program', $data);
    }
    
    public function delete($data){
        $this->db->where('id_program', $data['id_program']);
        $this->db->delete('program', $data);
    }

}
