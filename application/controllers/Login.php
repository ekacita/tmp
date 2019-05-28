<?php

defined('BASEPATH') OR exit('No direct script access alollowd');

class Log extends CI_Controller
{
    function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_POST["login"])) {
            $username = $this->input->post("username");
            $password = md5($this->input->post("password"));
            $query = $this->db->query("SELECT * FROM `master_user` WHERE username = '$username' AND password='$password'");
            if ($query->num_rows() > 0) {
                $tmp = $query->result_array();
                $_SESSION['nama'] = $tmp['3'];
                $_SESSION['username'] = $tmp['0'];
                $_SESSION['id_gudang'] = $tmp['4'];
                $_SESSION['level'] = $tmp['5'];

            } else {
                $this->session->set_flashdata;
            }
        }
        if (isset($_SESSION['username'])) {

        } else {
            $this->load->view('loginView');
        }
    }

}