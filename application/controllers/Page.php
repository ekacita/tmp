<?php
class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }

    function index()
    {
        //Allowing akses to SALES STAFF only
        if ($this->session->userdata('level') === '1') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }

    }

    function admin()
    {
        //Allowing akses to ADMIN only
        if ($this->session->userdata('level') === '2') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }
    }

    function head()
    {
        //Allowing akses to Kepala/Bos only
        if ($this->session->userdata('level') === '3') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }
    }

    function gudang()
    {
        //Allowing akses to STAFF GUDANG only
        if ($this->session->userdata('level') === '4') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }
    }

    function finance()
    {
        //Allowing akses to STAFF FINANCE only
        if ($this->session->userdata('level') === '5') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }
    }

    function super()
    {
        //Allowing akses to SUPERADMIN only
        if ($this->session->userdata('level') === '6') {
            $this->load->view('dashboard_view');
        } else {
            echo "Access Denied";
        }
    }
}
