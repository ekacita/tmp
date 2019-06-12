<?php


class User extends CI_Controller
{
    function index(){
        $this->template->load("template","_partial/userView");

    }
}