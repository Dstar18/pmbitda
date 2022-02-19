<?php

class InfoPendaftaran_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_infoPendaftaran');
        $this->db->order_by('id_infoPendaftaran', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_infoPendaftaran');
        $this->db->where('id_infoPendaftaran', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getCountInfoPendaftaran(){
        $this->db->select('COUNT(id_infoPendaftaran) as total');
        $this->db->from('tb_infoPendaftaran');
        $query = $this->db->get();
        return $query;
    }

    public function addInfoPendaftaran($post){
        $parse = array(
            'judul_infoPendaftaran'         => $post['judulInfoPendaftaran'],
            'ketjudul_infoPendaftaran'      => $post['ketjudulInfoPendaftaran'],
            'konten_infoPendaftaran'        => $post['kontenInfoPendaftaran'],
        );
        $this->db->insert('tb_infoPendaftaran', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editInfoPendaftaran($post){
        $parse = array(
            'judul_infoPendaftaran'         => $post['judulInfoPendaftaran'],
            'ketjudul_infoPendaftaran'      => $post['ketjudulInfoPendaftaran'],
            'konten_infoPendaftaran'        => $post['kontenInfoPendaftaran'],
        );
        $this->db->where('id_infoPendaftaran', $post['IDInfoPendaftaran']);
        $query = $this->db->update('tb_infoPendaftaran', $parse);
        return $query;
    }

    public function deleteInfoPendaftaran($id){
        $this->db->where('id_infoPendaftaran', $id);
        $this->db->delete('tb_infoPendaftaran');
    }
}