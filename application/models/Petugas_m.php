<?php

class Petugas_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->order_by('id_petugas', 'ASC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->where('id_petugas', $id);
        $query = $this->db->get();
        return $query;
    }

    public function login($post){
        $this->db->select('*');
        $this->db->from('tb_petugas');
        $this->db->where('username_petugas', $post['username']);
        $this->db->where('password_petugas', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function addPetugas($post){
        $params = array(
            'nip_petugas'           => $post['nip_petugas'],
            'nama_petugas'          => $post['nama_petugas'],
            'email_petugas'         => $post['email_petugas'],
            'nohp_petugas'          => $post['nohp_petugas'],
            'username_petugas'      => $post['username_petugas'],
            'password_petugas'      => $post['password_petugas'],
            'level_petugas'         => $post['level_petugas'],
        );
        $query = $this->db->insert('tb_petugas', $params);
        return $query;
    }

    public function editPetugas($post){
        $parse = array(
            'nip_petugas'           => $post['nip_petugas'],
            'nama_petugas'          => $post['nama_petugas'],
            'email_petugas'         => $post['email_petugas'],
            'nohp_petugas'          => $post['nohp_petugas'],
            'username_petugas'      => $post['username_petugas'],
            'password_petugas'      => $post['password_petugas'],
            'level_petugas'         => $post['level_petugas'],
        );
        $this->db->where('id_petugas', $post['id_petugas']);
        $query = $this->db->update('tb_petugas', $parse);
        return $query;
    }
    
    public function deletePetugas($id){
        $this->db->where('id_petugas', $id);
        $this->db->delete('tb_petugas');       
    }
}