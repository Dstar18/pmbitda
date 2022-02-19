<?php

class JalurPendaftaran_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_jalurPendaftaran');
        $this->db->order_by('id_jalurPendaftaran', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_jalurPendaftaran');
        $this->db->where('id_jalurPendaftaran', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getCountJalurPendaftaran(){
        $this->db->select('COUNT(id_jalurPendaftaran) as total');
        $this->db->from('tb_jalurPendaftaran');
        $query = $this->db->get();
        return $query;
    }

    public function addJalurPendaftaran($post){
        $parse = array(
            'judul_jalurPendaftaran'         => $post['judulJalurPendaftaran'],
            'ketJudul_jalurPendaftaran'      => $post['ketjudulJalurPendaftaran'],
            'konten_jalurPendaftaran'        => $post['kontenJalurPendaftaran'],
        );
        $this->db->insert('tb_jalurPendaftaran', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editJalurPendaftaran($post){
        $parse = array(
            'judul_jalurPendaftaran'         => $post['judulJalurPendaftaran'],
            'ketJudul_jalurPendaftaran'      => $post['ketjudulJalurPendaftaran'],
            'konten_jalurPendaftaran'        => $post['kontenJalurPendaftaran'],
        );
        $this->db->where('id_jalurPendaftaran', $post['IDJalurPendaftaran']);
        $query = $this->db->update('tb_jalurPendaftaran', $parse);
        return $query;
    }

    public function deleteJalurPendaftaran($id){
        $this->db->where('id_jalurPendaftaran', $id);
        $this->db->delete('tb_jalurPendaftaran');
    }
}