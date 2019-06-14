<?php


class Gudang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('gudangModel');
    }

    function index()
    {
        $this->template->load("template","_partial/gudangView");
    }

    function data_gudang()
    {
        $data = $this->gudangModel->gudang_list();
        echo json_encode($data);
    }

    function get_gudang()
    {
        $id = $this->input->get('id');
        $data = $this->gudangModel->get_gudang_by_kode($id);
        echo json_encode($data);
    }

    function simpan_gudang()
    {
        $kode = $this->input->post('kode');
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $data = $this->gudangModel->simpan_gudang($kode, $nama, $status);
        echo json_encode($data);
    }

    function update_gudang()
    {
        $id = $this->input->post('kobar');
        $nama = $this->input->post('nabar');
        $status = $this->input->post('status');
        $data = $this->gudangModel->update_gudang($id, $nama, $status);
        echo json_encode($data);
    }

    function hapus_barang()
    {
        $id = $this->input->post('kode');
        $data = $this->gudangModel->hapus_gudang($id);
        echo json_encode($data);
    }

}