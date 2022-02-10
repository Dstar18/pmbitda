<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model(['Berita_m','Halaman_m','Unggah_m']);
    }

    public function index()
    {
        $data['dataBerita'] = $this->Berita_m->getCountBerita()->row();
        $data['dataHalaman'] = $this->Halaman_m->getCountHalaman()->row();
        $data['dataUnggah'] = $this->Unggah_m->getCountUnggah()->row();
        $this->load->view('backend/dashboard/index', $data); 
    }
}