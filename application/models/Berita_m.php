<?php

class Berita_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_berita.id_petugas_berita');
        $query = $this->db->get();
        return $query;
    }
 
    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_berita');
        $this->db->where('id_berita', $id);
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_berita.id_petugas_berita');
        $query = $this->db->get();
        return $query;
    }

    public function getCountBerita(){
        $this->db->select('COUNT(id_berita) as total');
        $this->db->from('tb_berita');
        $query = $this->db->get();
        return $query;
    }

    public function addBerita($post){
        $parse = array(
            'date_insert_berita'    => $post['dateInsertBerita'],
            'date_update_berita'    => $post['dateUpdateBerita'],
            'judul_berita'          => $post['judulBerita'],
            'konten_berita'         => $post['kontenBerita'],
            'status_berita'         => $post['statusBerita'],
            'id_petugas_berita'     => $post['idPetugasBerita'],
        );
        $this->db->insert('tb_berita', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editBerita($post){
        $parse = array(
            'date_insert_berita'    => $post['dateInsertBerita'],
            'date_update_berita'    => $post['dateUpdateBerita'],
            'judul_berita'          => $post['judulBerita'],
            'konten_berita'         => $post['kontenBerita'],
            'status_berita'         => $post['statusBerita'],
            'id_petugas_berita'     => $post['idPetugasBerita'],
        );
        $this->db->where('id_berita', $post['idBerita']);
        $query =  $this->db->update('tb_berita', $parse);
        return $query;
    }

    public function deleteBerita($id){
        $this->db->where('id_berita', $id);
        $this->db->delete('tb_berita');
    }
}