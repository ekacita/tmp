<?php


class Suplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('suplierModel');
    }

    function index()
    {
        $this->template->load("template","_partial/suplierView");
    }

    function dataSuplier()
    {
        $data = $this->suplierModel->listSuplier();
        echo json_encode($data);
    }

    function getSuplier()
    {
        $kobar = $this->input->get('kode');
        $data = $this->suplierModel->getSuplierByKode($kobar);
        echo json_encode($data);
    }

    function simpanSuplier()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $alamat= $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $email = $this->input->post('email');
        $nomor = $this->input->post('nomor');
        $status = $this->input->post('status');
        $data = $this->suplierModel->simpanSuplier($kode, $nama, $alamat, $kota, $email, $nomor, $status);
        echo json_encode($data);
    }

    function updateSuplier()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $email = $this->input->post('email');
        $nomor = $this->input->post('nomor');
        $status = $this->input->post('status');
        $data = $this->suplierModel->updateSuplier($kode, $nama, $alamat, $kota, $email, $nomor, $status);
        echo json_encode($data);
    }

    function hapusSuplier()
    {
        $kode = $this->input->post('kode');
        $data = $this->suplierModel->hapusSuplier($kode);
        echo json_encode($data);
    }

}