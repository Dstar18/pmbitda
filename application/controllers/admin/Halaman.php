<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('Halaman_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataHalaman'] = $this->Halaman_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/halaman/halaman_data', $data);  
    }

    //Tampilan Tambah Halaman
    public function tambah(){
        $this->load->view('backend/halaman/halaman_add');
    }
    //Tambah Halaman
    public function tambahHalaman(){
        $respon  = array();
        $post  = $this->input->post(null, TRUE);
        $data = $this->Halaman_m->addHalaman($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Tampilan Edit Halaman
    public function edit($id){
        $data['dataHalaman'] = $this->Halaman_m->getById($id)->row();
        $this->load->view('backend/halaman/halaman_edit', $data);
    }
    //Edit Halaman
    public function editHalaman(){
        $post = $this->input->post(null, TRUE);
        $data = $this->Halaman_m->editHalaman($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Melihat Halaman
    public function view($id){
        $data['dataHalaman'] = $this->Halaman_m->getById($id)->row();
        $this->load->view('backend/halaman/halaman_view', $data);
    }

    //Hapus Halaman
    public function hapus($id){
        $this->Halaman_m->deleteHalaman($id);
        redirect(base_url().'admin/Halaman');
    }
}