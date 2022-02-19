<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengumuman extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model(['Pengumuman_m', 'Petugas_m']);
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPengumuman'] = $this->Pengumuman_m->getAll()->result();
        $data['dataPetugas'] = $this->Petugas_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/pengumuman/pengumuman_data', $data);  
    }

    //Tampilan Tambah Pengumuman
    public function tambah(){
        $this->load->view('backend/pengumuman/pengumuman_add');
    }
    //Tambah Berita
    public function tambahPengumuman(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["cover_pgm"]["name"])){
            $file = $this->uploadFile();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $cover_pgm = $file['name'];
                }
            } else{
                $response = array (
                    'status'        => 'error-upload',
                    'quoFile'       => 'tidak dapat upload file'
                );
            }
        } else{
            $cover_pgm = $post['cover_pgm_old'];
        }
        $parse = array(
            'date_insert_pgm'       => $post['date_insert_pgm'],
            'date_update_pgm'       => $post['date_update_pgm'],
            'judul_pgm'             => $post['judul_pgm'],
            'ketJudul_pgm'          => $post['ketJudul_pgm'],
            'cover_pgm'             => $cover_pgm,
            'konten_pgm'            => $post['konten_pgm'],
            'status_pgm'            => $post['status_pgm'],
            'id_petugas_pgm'        => $post['id_petugas_pgm'],
        );

        $this->Pengumuman_m->addPengumuman($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        echo json_encode($response);
        redirect(base_url().'admin/Pengumuman');
    }

    //Tampilan Edit Berita
    public function edit($id){
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        $this->load->view('backend/pengumuman/pengumuman_edit', $data);
    }
    //Edit Berita
    public function editPengumuman(){
       $post = $this->input->post(null, TRUE);
       if (!empty($_FILES["cover_pgm"]["name"])){
           $file = $this->uploadFile();
           $datax['xempty'] = $file;
           if($file['status'] == true){
               if($file['name'] != null){
                   $cover_pgm = $file['name'];
               }
           } else{
               $response = array(
                   'status'     => 'error-upload',
                   'quoFile'    => 'tidak bisa upload file'
               );
           }
       } else {
           $cover_pgm = $post['cover_pgm_old'];
       }
       $parse = array(
           'id_pgm'             => $post['id_pgm'],
           'date_insert_pgm'    => $post['date_insert_pgm'],
           'date_update_pgm'    => $post['date_update_pgm'],
           'judul_pgm'          => $post['judul_pgm'],
           'ketJudul_pgm'       => $post['ketJudul_pgm'],
           'cover_pgm'          => $cover_pgm,
           'konten_pgm'         => $post['konten_pgm'],
           'status_pgm'         => $post['status_pgm'],
           'id_petugas_pgm'     => $post['id_petugas_pgm'],
       );
       $this->Pengumuman_m->editPengumuman($parse);
       if($this->db->affected_rows()>0){
           $response = array(
               'status'     => 'success',
           );
       }
       echo json_encode($response);
       redirect(base_url().'admin/Pengumuman');  
    }

    //Melihat Pengumuman
    public function view($id){
        $data['dataPengumuman'] = $this->Pengumuman_m->getById($id)->row();
        $this->load->view('backend/pengumuman/pengumuman_view', $data);
    }

    //Hapus Pengumuman
    public function hapus($id){
        $this->Pengumuman_m->deletePengumuman($id);
        redirect(base_url().'admin/Pengumuman');
    }

    //Upload FIle
    public function uploadFile(){
        $config['upload_path']     = FCPATH.'upload/coverpengumuman/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'cover-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['cover_pgm']['name']) != null){
            if($this->upload->do_upload('cover_pgm')){
                $file_name = $this->upload->data('file_name');
                $data['name'] = $file_name;
                $data['status'] = TRUE;
                return $data;
            }else{
                $data['status'] = FALSE;
                $data['error'] = "data tidak masuk";
                return $data;
            }
        }else{
            $data['status'] = TRUE;
            $data['name'] = null;
            return $data;
        }
    }
}