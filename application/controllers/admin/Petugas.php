<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Petugas_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/petugas/petugas_data', $data);  
    }

    //Tampilan Tambah Petugas
    public function tambah(){
        $this->load->view('backend/petugas/petugas_add');
    }
    //Tambah Halaman
    public function tambahPetugas(){
        $respon  = array();
        $post  = $this->input->post(null, TRUE);
        $data = $this->Petugas_m->addPetugas($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Tampilan Edit Petugas
    public function edit($id){
        $data['dataPetugas'] = $this->Petugas_m->getById($id)->row();
        $this->load->view('backend/petugas/petugas_edit', $data);
    }

    //Edit Petugas
    public function editPetugas(){
        $post = $this->input->post(null, TRUE);
        $data = $this->Petugas_m->editPetugas($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Hapus Petugas
    public function hapus($id){
        $this->Petugas_m->deletePetugas($id);
        redirect(base_url().'admin/Petugas');
    }
}