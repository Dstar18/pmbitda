<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Berita extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model(['Berita_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataBerita'] = $this->Berita_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/berita/berita_data', $data);  
    }

    //Tampilan Tambah Berita
    public function tambah(){
        $this->load->view('backend/berita/berita_add');
    }
    //Tambah Berita
    public function tambahBerita(){
        $respon = array();
        $post = $this->input->post(null, TRUE);
        $data = $this->Berita_m->addBerita($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Tampilan Edit Berita
    public function edit($id){
        $data['dataBerita'] = $this->Berita_m->getById($id)->row();
        $this->load->view('backend/berita/berita_edit', $data);
    }
    //Edit Berita
    public function editBerita(){
        $post = $this->input->post(null, TRUE);
        $data = $this->Berita_m->editBerita($post);
        if($data == TRUE){
            header("Location: index");
        }else{
            $respon = array(
                'status' => 'gagal'
            );
        }
        echo json_encode($respon);
    }

    //Melihat Berita
    public function view($id){
        $data['dataBerita'] = $this->Berita_m->getById($id)->row();
        $this->load->view('backend/berita/berita_view', $data);
    }

    //Hapus Berita
    public function hapus($id){
        $this->Berita_m->deleteBerita($id);
        redirect(base_url().'admin/Berita');
    }
}