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

    function data_user()
    {
        $data = $this->userModel->user_list();
        echo json_encode($data);
    }

    function get_user()
    {
        $username = $this->input->get('id');
        $data = $this->userModel->get_user_by_kode($username);
        echo json_encode($data);
    }

    function simpan_user()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $gudang = $this->input->post('gudang');
        $level = $this->input->post('level');
        $data = $this->userModel->simpan_user($username, $email, $pass, $nama, $gudang, $level);
        echo json_encode($data);
    }
    function update_user()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');
        $nama = $this->input->post('nama');
        $gudang = $this->input->post('gudang');
        $level = $this->input->post('level');
        $data = $this->userModel->update_user($username, $email, $pass, $nama, $gudang, $level);
        echo json_encode($data);
    }

    function hapus_user()
    {
        $username = $this->input->post('kode');
        $data = $this->userModel->hapus_user($username);
        echo json_encode($data);
    }

}