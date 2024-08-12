<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BelajarMandarin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');  // Memuat helper URL
    }

    public function index() {
        $this->load->view('belajar_mandarin_home');
    }
}
