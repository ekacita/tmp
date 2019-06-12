<?php

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('loginModel');
    }

    function index(){
        $this->load->view('loginView');
    }

    function auth(){
        $username    = $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->login_model->validate($username,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $name  = $data['nama'];
            $username = $data['username'];
            $level = $data['level'];
            $sesdata = array(
                'nama'  => $name,
                'username'  => $username,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($level === '1'){
                redirect('page');

                // access login for sales
            }elseif($level === '2'){
                redirect('page/admin');

                // access login for author
            }elseif($level === '3'){
                redirect('page/head');

                // access login for author
            }elseif($level === '4'){
                redirect('page/gudang');

                // access login for author
            }elseif($level === '5'){
                redirect('page/finance');

                // access login for author
            }else{
                redirect('page/super');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}