<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Unggah extends CI_Controller{

    function __construct(){
        parent::__construct();
        check_not_petugas();
        $this->load->model('Unggah_m');
        $this->load->library('form_validation');
    }

    //Index
    public function index(){
        $data['dataUnggah'] = $this->Unggah_m->getAll()->result();
        // echo json_encode($data);
        $this->load->view('backend/unggah/unggah_data', $data);  
    }

    //Tampilan Tambah Unggah File
    public function tambah(){
        $this->load->view('backend/unggah/unggah_add');
    }
    //Tambah Unggah File
    public function tambahUnggah(){
        $post = $this->input->post(null, TRUE);
        if (!empty($_FILES["file_unggah"]["name"])){
            $file = $this->uploadFile();
            $datax['xempty'] = $file;
            if($file['status'] == true){
                if($file['name'] != null){
                    $file_unggah = $file['name'];
                }
            } else{
                $response = array(
                    'status'        => 'error-upload',
                    'quoFile'       => 'tidak dapat upload file'
                );
            }
        } else{
            $file_unggah = $post['file_old'];
        }
        $parse = array(
            'nama_unggah'           => $post['nama_unggah'],
            'keterangan_unggah'     => $post['keterangan_unggah'],
            'file_unggah'           => $file_unggah,
        );

        $this->Unggah_m->addUnggah($parse);
        if($this->db->affected_rows()>0){
            $response = array(
                'status'    => 'success',
            );
        }
        echo json_encode($response);
        redirect(base_url().'admin/Unggah');
    }
    //Upload FIle
    public function uploadFile(){
        $config['upload_path']     = FCPATH.'upload/unggah/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg|image|pdf|pptx|xls|xlsx|docx|txt';
        $config['max_size']        = 5000;
        $config['max_width']       = 5000;
        $config['max_height']      = 5000;
        $config['file_name']       = 'file-'.date('ymd').'-'.substr(md5(rand()),0,10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['file_unggah']['name']) != null){
            if($this->upload->do_upload('file_unggah')){
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

    //Download File
    public function download($id){
		$data = $this->db->get_where('tb_unggah',['id_unggah'=>$id])->row();
		force_download('upload/unggah/'.$data->file_unggah,NULL);
	}

    // public function download($id){
    //     $this->Unggah_m->download($id);
    //     redirect(base_url().'admin/Unggah');
    // }

    //Hapus File
    public function hapus($id){
        $this->Unggah_m->deleteUnggah($id);
        redirect(base_url().'admin/Unggah');
    }
}