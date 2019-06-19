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
        $kobar = $this->input->get('id');
        $data = $this->userModel->get_user_by_kode($kobar);
        echo json_encode($data);
    }

    function simpan_user()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $kel = $this->input->post('kel');
        $beli = $this->input->post('beli');
        $jual = $this->input->post('jual');
        $seller = $this->input->post('seller');
        $status = $this->input->post('status');
        $data = $this->barangModel->simpan_barang($kode, $nama, $beli, $jual, $kel, $seller, $status);
        echo json_encode($data);
    }
ggit
    function update_user()
    {
        $kobar = $this->input->post('kobar');
        $nabar = $this->input->post('nabar');
        $kel = $this->input->post('kel');
        $beli = $this->input->post('beli');
        $jual = $this->input->post('jual');
        $reseller = $this->input->post('reseller');
        $status = $this->input->post('status');
        $data = $this->barangModel->update_barang($kobar, $nabar, $beli, $jual, $kel, $reseller, $status);
        echo json_encode($data);
    }

    function hapus_barang()
    {
        $kobar = $this->input->post('kode');
        $data = $this->barangModel->hapus_barang($kobar);
        echo json_encode($data);
    }

}