<?php

class Pengaturan_m extends CI_Model{

    public function getAll(){
        $this->db->select('*');
        $this->db->from('tb_pengaturan');
        $this->db->order_by('id_pengaturan', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function getById($id){
        $this->db->select('*');
        $this->db->from('tb_pengaturan');
        $this->db->where('id_pengaturan', $id);
        $query = $this->db->get();
        return $query;
    }

    public function editPengaturan($post){
        $parse = array(
            'nama_pengaturan'           => $post['nama_pengaturan'],
            'logo_pengaturan'           => $post['logo_pengaturan'],
            'ketweb_pengaturan'         => $post['ketweb_pengaturan'],
            'alamat_pengaturan'         => $post['alamat_pengaturan'],
            'phone_pengaturan'          => $post['phone_pengaturan'],
            'fax_pengaturan'            => $post['fax_pengaturan'],
            'email_pengaturan'          => $post['email_pengaturan'],
            'jamkerja1_pengaturan'      => $post['jamkerja1_pengaturan'],
            'jamkerja2_pengaturan'      => $post['jamkerja2_pengaturan'],
            'jamkerja3_pengaturan'      => $post['jamkerja3_pengaturan'],
            'ig_pengaturan'             => $post['ig_pengaturan'],
            'fb_pengaturan'             => $post['fb_pengaturan'],
            'tiktok_pengaturan'         => $post['tiktok_pengaturan'],
        );
        $this->db->where('id_pengaturan', $post['id_pengaturan']);
        $query = $this->db->update('tb_pengaturan', $parse);
        return $query;
    }
}