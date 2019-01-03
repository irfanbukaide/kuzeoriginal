<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    public function index()
    {

        $this->data->event = $this->event->limit(3)->get_all();
        $this->data->rand_image = $this->item_img->select_random();
        $this->load->view('Home', $this->data);

    }
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */