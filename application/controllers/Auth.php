<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function register()
    {
        $this->load->view('auth/register');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

}