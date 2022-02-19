<?php

class Pengumuman_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->order_by('id_pgm', 'DESC');
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_pengumuman.id_petugas_pgm');
        $query = $this->db->get();
        return $query;
    }
 
    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_pengumuman');
        $this->db->where('id_pgm', $id);
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_pengumuman.id_petugas_pgm');
        $query = $this->db->get();
        return $query;
    }

    public function getCountPengumuman(){
        $this->db->select('COUNT(id_pgm) as total');
        $this->db->from('tb_pengumuman');
        $query = $this->db->get();
        return $query;
    }

    public function addPengumuman($post){
        $parse = array(
            'date_insert_pgm'       => $post['date_insert_pgm'],
            'date_update_pgm'       => $post['date_update_pgm'],
            'judul_pgm'             => $post['judul_pgm'],
            'ketJudul_pgm'          => $post['ketJudul_pgm'],
            'cover_pgm'             => $post['cover_pgm'],
            'konten_pgm'            => $post['konten_pgm'],
            'status_pgm'            => $post['status_pgm'],
            'id_petugas_pgm'        => $post['id_petugas_pgm'],
        );
        $this->db->insert('tb_pengumuman', $parse);
        $id = $this->db->insert_id();
        return $id;
    }

    public function editPengumuman($post){
        $parse = array(
            'date_insert_pgm'       => $post['date_insert_pgm'],
            'date_update_pgm'       => $post['date_update_pgm'],
            'judul_pgm'             => $post['judul_pgm'],
            'ketJudul_pgm'          => $post['ketJudul_pgm'],
            'cover_pgm'             => $post['cover_pgm'],
            'konten_pgm'            => $post['konten_pgm'],
            'status_pgm'            => $post['status_pgm'],
            'id_petugas_pgm'        => $post['id_petugas_pgm'],
        );
        $this->db->where('id_pgm', $post['id_pgm']);
        $query =  $this->db->update('tb_pengumuman', $parse);
        return $query;
    }

    public function deletePengumuman($id){
        $this->db->where('id_pgm', $id);
        $this->db->delete('tb_pengumuman');
    }
}