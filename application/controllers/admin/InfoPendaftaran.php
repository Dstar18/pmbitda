<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoPendaftaran extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('InfoPendaftaran_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataInfo'] = $this->InfoPendaftaran_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/infopendaftaran/infopendaftaran_data', $data);  
    }

    //Tampilan Tambah Data
    public function tambah(){
        $this->load->view('backend/infopendaftaran/infopendaftaran_add');
    }
    //Tambah Data
    public function tambahInfoPendaftaran(){
        $respon  = array();
        $post  = $this->input->post(null, TRUE);
        $data = $this->InfoPendaftaran_m->addInfoPendaftaran($post);
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
        $data['dataInfo'] = $this->InfoPendaftaran_m->getById($id)->row();
        $this->load->view('backend/infopendaftaran/infopendaftaran_edit', $data);
    }
    //Edit Data
    public function editInfoPendaftaran(){
        $post = $this->input->post(null, TRUE);
        $data = $this->InfoPendaftaran_m->editInfoPendaftaran($post);
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
        $data['dataInfo'] = $this->InfoPendaftaran_m->getById($id)->row();
        $this->load->view('backend/infopendaftaran/infopendaftaran_view', $data);
    }

    //Hapus Data
    public function hapus($id){
        $this->InfoPendaftaran_m->deleteInfoPendaftaran($id);
        redirect(base_url().'admin/InfoPendaftaran');
    }
}