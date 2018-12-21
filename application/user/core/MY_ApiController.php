<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_ApiController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // load model here


        // load library here
        $this->load->library('session');

        // load helper here
        $this->load->helper('url');
    }


}

/* End of file MY_ApiController.php */