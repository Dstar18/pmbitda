<?php

class Unggah_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_unggah');
        $this->db->order_by('id_unggah', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_unggah');
        $this->db->where('id_unggah', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getCountUnggah(){
        $this->db->select('COUNT(id_unggah) as total');
        $this->db->from('tb_unggah');
        $query = $this->db->get();
        return $query;
    }

    public function addUnggah($post){
        $params = array(
            'nama_unggah'           => $post['nama_unggah'],
            'keterangan_unggah'     => $post['keterangan_unggah'],
            'file_unggah'           => $post['file_unggah'],
        );
        $query = $this->db->insert('tb_unggah', $params);
        return $query;
    }

    public function download($id){
        $this->db->where('id_unggah', $id);
        $this->db->force_download('tb_unggah');
    }

    public function deleteUnggah($id){
        $this->db->where('id_unggah', $id);
        $this->db->delete('tb_unggah');
    }
}