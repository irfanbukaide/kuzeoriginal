<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeApiCtrl extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->isonline) {
            echo json_encode('Session timeout', true);
            exit();
        }
    }

    public function best_seller()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('best_seller')) {
//            echo 'Not Cached';
            $data = $this->item->as_array()->where_i_best('1')
                ->order_by('created_at', 'DESC')
                ->limit(8)
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }
            $this->cache->save('best_seller', $hasil, 300);

        } else {
//            echo 'cached';
            $hasil = $this->cache->get('best_seller');
        }

        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);

    }


    public function new_arrival()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('new_arrival')) {

            $data = $this->item->as_array()->where_i_new('1')
                ->order_by('created_at', 'DESC')
                ->limit(8)
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }

            $this->cache->save('new_arrival', $hasil, 300);
        } else {
            $hasil = $this->cache->get('new_arrival');
        }


        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);
    }

    public function sale_item()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('sale_item')) {
            $data = $this->item->as_array()->where_i_sale('1')
                ->order_by('created_at', 'DESC')
                ->limit(8)
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }

            $this->cache->save('sale_item', $hasil, 300);
        } else {
            $hasil = $this->cache->get('sale_item');
        }

        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);
    }

    public function kbest_seller()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('best_seller')) {
//            echo 'Not Cached';
            $data = $this->item->as_array()->where_i_best('1')
                ->order_by('created_at', 'DESC')
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }
            $this->cache->save('best_seller', $hasil, 300);

        } else {
//            echo 'cached';
            $hasil = $this->cache->get('best_seller');
        }

        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);
    }

    public function knew_arrival()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('new_arrival')) {

            $data = $this->item->as_array()->where_i_new('1')
                ->order_by('created_at', 'DESC')
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }

            $this->cache->save('new_arrival', $hasil, 300);
        } else {
            $hasil = $this->cache->get('new_arrival');
        }


        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);
    }

    public function ksale_item()
    {
        ob_start('ob_gzhandler');
        $hasil = array();
        if (!$this->cache->get('sale_item')) {
            $data = $this->item->as_array()->where_i_sale('1')
                ->order_by('created_at', 'DESC')
                ->get_all();

            if ($data) {
                foreach ($data as $k => $v) {

                    $hasil[$k]['i_kode'] = $v['i_kode'];
                    $hasil[$k]['i_url'] = $v['i_url'];
                    $hasil[$k]['i_nama'] = $v['i_nama'];
                    $hasil[$k]['i_hrg'] = $v['i_hrg'];
                    $hasil[$k]['i_img'] = $this->get_image($v['i_kode']);
                }
            }

            $this->cache->save('sale_item', $hasil, 300);
        } else {
            $hasil = $this->cache->get('sale_item');
        }

        echo json_encode($hasil, JSON_UNESCAPED_UNICODE);
    }


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */