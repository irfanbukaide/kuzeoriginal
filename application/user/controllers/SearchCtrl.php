<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('session');

        $cari = $_GET['keyword'];

        $this->session->set_userdata('search', $cari);

        $this->load->view('Pencarian', $this->data);

    }
}