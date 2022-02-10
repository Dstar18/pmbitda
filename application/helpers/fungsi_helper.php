<?php

function check_already_login_petugas(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_petugas');
    if($user_session){
        // echo "Masuk";
        redirect('admin/Dashboard');
    }
}

function check_not_petugas(){
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id_petugas');
    if(!$user_session){
        redirect('admin/Auth/login');
    }
}