<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 12/21/18
 * Time: 11:59 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryApiCtrl extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function json_menu()
    {
        // load model
        $this->load->model('Kategori_m', 'kategori');
        $this->load->model('Item_kategori_m', 'item_kategori');
        $categories = $this->kategori->fields('k_kode,k_url,k_nama')->get_all();
        $categories = function () use ($categories) {
            foreach ($categories as $category) {
                $id = $category->k_kode;
                $counter = $this->item_kategori->where('k_kode', $id)->count_rows();
                $category->counter = $counter;
            }

            return (array)$categories;
        };

        echo json_encode($categories(), JSON_UNESCAPED_UNICODE);
    }

    public function json_item_all()
    {
        // load model
        $this->load->model('Item_m', 'item');
        $this->load->model('Item_img_m', 'item_img');

        $items = $this->item->fields('i_kode,i_url,i_nama,i_hrg,i_sale,i_new,i_best')->get_all();
        $items = function () use ($items) {
            foreach ($items as $item) {
                $id = $item->i_kode;
//                $image = $this->item_img->where('i_kode',$id)->get();
//                $item->img = $image;
            }

            return (array)$items;
        };
        echo json_encode($items(), JSON_UNESCAPED_UNICODE);
    }

    public function json_item_limit($start, $end)
    {

    }

    public function json_item_image()
    {
        // load model
        $this->load->model('Item_img_m', 'item_img');

        $item_images = $this->item_img->fields('ii_kode,ii_url')->get_all();
        $item_images = function () use ($item_images) {

            return (array)$item_images;
        };
        echo json_encode($item_images(), JSON_UNESCAPED_UNICODE);
    }

}

/* End of file CategoryApiCtrlphp */