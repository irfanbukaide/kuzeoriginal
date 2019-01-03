<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 1/3/19
 * Time: 10:44 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class SearchApiCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

    }

    private function get_image($i_kode)
    {
        $this->load->model('Item_img_m', 'item_img');

        $data = $this->item_img
            ->where(array('i_kode' => $i_kode))->order_by('created_at', 'DESC')
            ->get();

        if ($data != NULL) {
            $hasil = $data->ii_url;
        } else {
            $im = base_url('assets/img/noimage.jpg');
            $hasil = $im;
        }

        return $hasil;
    }

    private function get_category($i_kode)
    {
        $this->load->model('Kategori_m', 'kategori');
        $this->load->model('Item_kategori_m', 'item_kategori');

        $categories = array();
        $item_categories = $this->item_kategori->where('i_kode', $i_kode)->with_kategori()->get_all();
        foreach ($item_categories as $item_category) {
            array_push($categories, $item_category->kategori->k_nama);
        }


        return implode(', ', $categories);

    }

    public function index()
    {
        $this->load->library('session');

        $keyword = $this->session->userdata('search');

        $this->load->model('Item_m', 'item');

        $array_items = array();
        $items = $this->item->as_array()->where('i_url LIKE', '%' . $keyword . '%')->get_all();

        if ($items) {
            foreach ($items as $item) {
                $id = $item['i_kode'];
                $image = $this->get_image($id);
                $category = $this->get_category($id);
                $item['i_img'] = $image;
                $item['i_category'] = $category;
                $item['i_url'] = site_url('item/' . $item['i_url']);

                array_push($array_items, $item);

            }
        }

        echo json_encode($array_items, JSON_UNESCAPED_UNICODE);
    }

}

/* End of file SearchApiCtrl.php */