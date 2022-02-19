<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JalurPendaftaran extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('JalurPendaftaran_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataJalur'] = $this->JalurPendaftaran_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/jalurpendaftaran/jalurpendaftaran_data', $data);  
    }

    //Tampilan Tambah Data
    public function tambah(){
        $this->load->view('backend/jalurpendaftaran/jalurpendaftaran_add');
    }
    //Tambah Data
    public function tambahJalurPendaftaran(){
        $respon  = array();
        $post  = $this->input->post(null, TRUE);
        $data = $this->JalurPendaftaran_m->addJalurPendaftaran($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Tampilan Edit Data
    public function edit($id){
        $data['dataJalur'] = $this->JalurPendaftaran_m->getById($id)->row();
        $this->load->view('backend/jalurpendaftaran/jalurpendaftaran_edit', $data);
    }
    //Edit Data
    public function editJalurPendaftaran(){
        $post = $this->input->post(null, TRUE);
        $data = $this->JalurPendaftaran_m->editJalurPendaftaran($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Melihat Data
    public function view($id){
        $data['dataJalur'] = $this->JalurPendaftaran_m->getById($id)->row();
        $this->load->view('backend/jalurpendaftaran/jalurpendaftaran_view', $data);
    }

    //Hapus Data
    public function hapus($id){
        $this->JalurPendaftaran_m->deleteJalurPendaftaran($id);
        redirect(base_url().'admin/JalurPendaftaran');
    }
}