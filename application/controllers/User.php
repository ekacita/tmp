<?php


class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    function index()
    {
        $this->template->load("template","_partial/userView");
    }

    function dataUser()
    {
        $data = $this->userModel->user_list();
        echo json_encode($data);
    }

    function getUuser()
    {
        $username = $this->input->get('username');
        $data = $this->userModel->getUser($username);
        echo json_encode($data);
    }

    function simpanUser()
    {
        $username= $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $gudang = $this->input->post('id_gudang');
        $level = $this->input->post('level');
        $data = $this->barangModel->simpanUser($username, $email,
            $password, $nama, $gudang, $level);
        echo json_encode($data);
    }

    function updateUser()
    {
        $username = $this->input->post('kobar');
        $email = $this->input->post('nabar');
        $password = $this->input->post('kel');
        $nama = $this->input->post('beli');
        $gudang = $this->input->post('jual');
        $level = $this->input->post('reseller');
        $data = $this->barangModel->updateUSer($username, $email,
            $password, $nama, $gudang, $level);
        echo json_encode($data);
    }

    function hapusUser()
    {
        $username = $this->input->post('username');
        $data = $this->barangModel->hapusUser($username);
        echo json_encode($data);
    }

}