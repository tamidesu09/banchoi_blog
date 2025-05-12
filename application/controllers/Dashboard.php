<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
        $this->load->view('client/cdashboard');
    }

    // Optional: Add more methods if needed
    public function settings() {
        echo "Settings Page (Example)";
    }
}