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
            $filename = 'upload/image/' . $item_image->ii_kode . '.png';
            $filefisik = fopen($filename, "w");
            fwrite($filefisik, $item_image->ii_data);
            fclose($filefisik);
            $this->item_img->update(array('ii_kode' => $item_image->ii_kode, 'ii_url' => $filename), 'ii_kode');
            echo $filename . ' downloaded.<br>';
        }
    }

}

/* End of file DownloadCtrl.php */