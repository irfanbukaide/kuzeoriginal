<?php

class Item extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        // GET
        $i_url = $this->uri->segment(4);
        $item = $this->item->where('i_url', $i_url)->get();
        $i_kode = $item->i_kode;
        $item_detils = $this->item_detil->where('i_kode', $i_kode)->get();
        $images = $this->item_img->field('ii_url')->where('i_kode', $i_kode)->get()->order_by('created_at', 'DESC');


        // parsing
        $this->data->item = $item;
        $this->data->item_detils = $item_detils;
        $this->data->images = $images;


        $this->load->view('Detil', $this->data);
    }

}