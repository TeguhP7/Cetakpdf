<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Pdf_tcpdf');
    }

    public function index()
    {
        $this->load->view('cetak_view');
    }
}
