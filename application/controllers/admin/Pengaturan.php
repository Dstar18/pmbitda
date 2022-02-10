<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('Pengaturan_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataPengaturan'] = $this->Pengaturan_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/pengaturan/pengaturan_data', $data);  
    }

    //Tampilan Edit Pengaturan
    public function edit($id){
        $data['dataPengaturan'] = $this->Pengaturan_m->getById($id)->row();
        $this->load->view('backend/pengaturan/pengaturan_edit', $data);
    }
    //Edit Pengaturan
    public function editPengaturan(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["logo_pengaturan"]["name"])){
            $file = $this->uploadImage();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $logo_pengaturan = $file['name'];
                }
            } else {
                $response = array(
                    'status'    => 'error-upload',
                    'quoFile'   => 'File tidak dapat di upload'
                );
            }
        } else {
            $logo_pengaturan = $post['logo_pengaturan_old'];
        }
        $parse = array(
            'id_pengaturan'             => $post['id_pengaturan'],
            'nama_pengaturan'           => $post['nama_pengaturan'],
            'logo_pengaturan'           => $logo_pengaturan,
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
        $this->Pengaturan_m->editPengaturan($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        redirect(base_url().'admin/Pengaturan');
    }

    //Upload File
    public function uploadImage(){
        $config['upload_path']     = FCPATH.'upload/imglogo/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg|image';
        $config['max_size']        = 5048;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'logo-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['logo_pengaturan']['name']) != null){
            if($this->upload->do_upload('logo_pengaturan')){
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