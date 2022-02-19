<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model(['InfoPendaftaran_m','JalurPendaftaran_m','Pengumuman_m','Unggah_m']);
    }

    public function index()
    {
        $data['dataInfo'] = $this->InfoPendaftaran_m->getCountInfoPendaftaran()->row();
        $data['dataJalur'] = $this->JalurPendaftaran_m->getCountJalurPendaftaran()->row();
        $data['dataPengumuman'] = $this->Pengumuman_m->getCountPengumuman()->row();
        $data['dataUnggah'] = $this->Unggah_m->getCountUnggah()->row();
        $this->load->view('backend/dashboard/index', $data); 
    }
}