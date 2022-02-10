<?php

class Halaman_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_halaman');
        $this->db->order_by('id_halaman', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_halaman');
        $this->db->where('id_halaman', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getCountHalaman(){
        $this->db->select('COUNT(id_halaman) as total');
        $this->db->from('tb_halaman');
        $query = $this->db->get();
        return $query;
    }

    public function addHalaman($post){
        $parse = array(
            'judul_halaman'         => $post['judulHalaman'],
            'ketjudul_halaman'      => $post['ketjudulHalaman'],
            'konten_halaman'        => $post['kontenHalaman'],
        );
        $this->db->insert('tb_halaman', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editHalaman($post){
        $parse = array(
            'judul_halaman'         => $post['judulHalaman'],
            'ketjudul_halaman'      => $post['ketjudulHalaman'],
            'konten_halaman'        => $post['kontenHalaman'],
        );
        $this->db->where('id_halaman', $post['idHalaman']);
        $query = $this->db->update('tb_halaman', $parse);
        return $query;
    }

    public function deleteHalaman($id){
        $this->db->where('id_halaman', $id);
        $this->db->delete('tb_halaman');
    }
}