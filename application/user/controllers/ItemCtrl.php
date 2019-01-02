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

        $array_item_detils = array();
        $item_detils = $this->item_detil->fields('item_detil_kode')->where('i_kode', $i_kode)->with_item_qty()->with_ukuran()->get_all();
        $images = $this->item_img->fields('ii_url')->where('i_kode', $i_kode)->order_by('created_at', 'DESC')->get_all();


        foreach ($item_detils as $item_detil) {
            $hasil = array();

            $item_qty = $item_detil->item_qty;

            $hasil['item_detil_kode'] = $item_detil->item_detil_kode;
            $hasil['ukuran_kode'] = $item_detil->ukuran->u_kode;
            $hasil['ukuran_nama'] = $item_detil->ukuran->u_nama;
            $hasil['ukuran_qty'] = 0;

            foreach ($item_qty as $qty) {
                $hasil['ukuran_qty'] += (int)$qty->iq_qty;
            }

            array_push($array_item_detils, $hasil);
        }

        // parsing
        $this->data->item = $item;
        $this->data->item_detils = $array_item_detils;
        $this->data->images = $images;


        $this->load->view('ItemDetil', $this->data);

    }

}