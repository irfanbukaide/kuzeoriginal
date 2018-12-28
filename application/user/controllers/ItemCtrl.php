<?php

class ItemCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();


        $this->data->parentname = ucfirst($this->uri->segment(1));
        $this->data->parenturl = site_url($this->uri->segment(1));
        $this->data->breadcrumbname = ucfirst($this->uri->segment(2));
        $this->data->breadcrumburl = site_url($this->uri->segment(2));
        $this->data->breadcrumbcurrent = ucfirst(str_replace('-', ' ', $this->uri->segment(4)));
    }

    public function get_item_from_url($i_url)
    {
        $item = $this->item->where('i_url', $i_url)->get();
        $i_kode = $item->i_kode;
        $item_detils = $this->item_detil->fields('item_detil_kode')->where('i_kode', $i_kode)->with_item_qty('fields:iq_qty')->with_ukuran()->get_all();
        $images = $this->item_img->fields('ii_url')->where('i_kode', $i_kode)->order_by('created_at', 'DESC')->get_all();


        // parsing
        $this->data->item = $item;
        $this->data->item_detils = $item_detils;
        $this->data->images = $images;


        $this->load->view('ItemDetil', $this->data);
    }

}