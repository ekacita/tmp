<?php


class Barang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('barangModel');
    }

    function index()
    {
        $this->template->load("template","_partial/barangView");
    }

    function data_barang()
    {
        $data = $this->barangModel->barang_list();
        echo json_encode($data);
    }

    function get_barang()
    {
        $kobar = $this->input->get('id');
        $data = $this->barangModel->get_barang_by_kode($kobar);
        echo json_encode($data);
    }

    function simpan_barang()
    {
        $kobar = $this->input->post('kobar');
        $nabar = $this->input->post('nabar');
        $kel = $this->input->post('kel');
        $beli = $this->input->post('beli');
        $jual = $this->input->post('jual');
        $reseller = $this->input->post('reseller');
        $status = $this->input->post('status');
        $data = $this->barangModel->simpan_barang($kobar, $nabar, $beli, $jual, $kel, $reseller, $status);
        echo json_encode($data);
    }

    function update_barang()
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