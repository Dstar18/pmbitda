<?php

Class Fungsi{
    protected $ci;
    var $pengirim;
    var $subbidangID;

    function __construct(){
        $this->ci =& get_instance();
    }

    function petugas_login(){
        $this->ci->load->model('Petugas_m');
        $id_petugas = $this->ci->session->userdata('id_petugas');
        $petugas_data = $this->ci->Petugas_m->getById($id_petugas)->row();
        return $petugas_data;
    }
 
    function pengaturan_web(){
        $this->ci->load->model('Pengaturan_m');
        $pengaturan_data = $this->ci->Pengaturan_m->getAll()->row();
        return $pengaturan_data;
    
    }
}