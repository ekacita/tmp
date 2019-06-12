<?php


class Pelanggan extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('pelangganModel');
    }

    function index(){
        $this->template->load("template","_partial/pelangganView");

    }
}