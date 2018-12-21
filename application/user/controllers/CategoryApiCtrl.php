<?php
/**
 * Created by PhpStorm.
 * User: irfan
 * Date: 12/21/18
 * Time: 11:59 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryApiCtrl extends MY_ApiController
{

    public function json_menu()
    {
        // load model
        $this->load->model('Kategori_m', 'kategori');

        $categories = $this->kategori->fields('k_kode,k_url,k_nama')->get_all();

        echo json_encode($categories);
    }

}

/* End of file CategoryApiCtrlphp */