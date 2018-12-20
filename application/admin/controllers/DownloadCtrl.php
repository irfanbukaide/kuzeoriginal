<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadCtrl extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->isonline) {
            echo 'Not Permitted';
        }
    }

    public function image()
    {
        $item_images = $this->item_img->get_all();

        foreach ($item_images as $item_image) {
            file_put_contents('/upload/image/' . $item_image->ii_kode . '.png', $item_image->ii_data);
            echo 'Image ' . $item_image->ii_kode . ' downloaded.\n';
        }
    }

}

/* End of file DownloadCtrl.php */