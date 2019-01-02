<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagApiCtrl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Bag_m', 'cart');
        $this->load->model('Item_m', 'item');
        $this->load->model('Item_detil_m', 'item_detil');
        $this->load->model('Item_img_m', 'item_img');
        $this->load->model('Promo_m', 'promo');
        $this->load->model('Ukuran_m', 'ukuran');


        if (!$this->session->isonline) {
            echo json_encode('Session timeout', true);
            exit();
        }
    }

    private function get_image($i_kode)
    {

        $data = $this->item_img
            ->where(array('i_kode' => $i_kode))->order_by('created_at', 'DESC')
            ->get();

        if ($data != NULL) {
//            $image = new Imagick();
//            $image->readimageblob($data->ii_data);
//            $image->setImageCompressionQuality(80);
//            $hasil = $this->view_image($data->ii_type, $image->getImageBlob());

            $hasil = $data->ii_url;
        } else {
            $im = base_url('assets/img/noimage.jpg');
            $hasil = $im;
        }

        return $hasil;
    }

    public function bag_index()
    {
        $bags = function () {
            $bags = $this->cart->where('pengguna_kode', $_SESSION['id'])->get_all();

            if ($bags) {
                foreach ($bags as $bag) {
                    $item_detil = $this->item_detil->where('item_detil_kode', $bag->item_detil_kode)->get();

                    // item
                    $item = $this->item->where('i_kode', $item_detil->i_kode)->get();
                    if ($item) {
                        $bag->nama = $item->i_nama;
                    } else {
                        $bag->nama = '';
                    }

                    // item_img
                    $bag->image_url = $this->get_image($bag->item_kode);

                    // item ukuran
                    $ukuran = $this->ukuran->where('u_kode', $item_detil->u_kode)->get();
                    if ($ukuran) {
                        $bag->ukuran = $ukuran->u_nama;
                    } else {
                        $bag->ukuran = '';
                    }

                    $bag->bag_delete = site_url('bag/' . $bag->ca_kode . '/delete');


                    unset($bag->item_kode);
                    unset($bag->item_detil_kode);
                    unset($bag->item_ukuran_kode);
                }
            }

            return $bags;
        };

        $total = function () {
            $hasil = 0;
            $bags = $this->cart->where('pengguna_kode', $_SESSION['id'])->get_all();
            if ($bags) {
                foreach ($bags as $bag_total) {
                    $hasil += (int)$bag_total->ca_tharga;
                }
            } else {
                $hasil = 0;
            }


            return (int)$hasil;
        };

        $grand_total = function () use ($total) {
            return $total();
        };


        $resp = array();

        $resp['bags'] = $bags();
        $resp['bags_promo_kode'] = '';
        $resp['bags_promo_ket'] = '';
        $resp['bags_promo_harga'] = 0;
        $resp['bags_total'] = $total();
        $resp['bags_grand_total'] = $grand_total();
        $resp['bags_url'] = site_url('bag/checkout');

        echo json_encode($resp, true);
    }

    public function bag_promo($kodepromo = '')
    {
        $promo = $this->promo->where(array(
            'promo_nama' => $kodepromo,
            'promo_aktif' => '1'
        ))->get();


        $bags = function () {
            $bags = $this->cart->where('pengguna_kode', $_SESSION['id'])->get_all();

            if ($bags) {
                foreach ($bags as $bag) {
                    $item_detil = $this->item_detil->where('item_detil_kode', $bag->item_detil_kode)->get();

                    // item
                    $item = $this->item->where('i_kode', $item_detil->i_kode)->get();
                    if ($item) {
                        $bag->nama = $item->i_nama;
                    } else {
                        $bag->nama = '';
                    }

                    // item_img
                    $bag->image_url = $this->get_image($bag->item_kode);

                    // item ukuran
                    $ukuran = $this->ukuran->where('u_kode', $item_detil->u_kode)->get();
                    if ($ukuran) {
                        $bag->ukuran = $ukuran->u_nama;
                    } else {
                        $bag->ukuran = '';
                    }

                    $bag->bag_delete = site_url('bag/' . $bag->ca_kode . '/delete');


                    unset($bag->item_kode);
                    unset($bag->item_detil_kode);
                    unset($bag->item_ukuran_kode);
                }
            }

            return $bags;
        };

        $total = function () {
            $hasil = 0;
            $bags = $this->cart->where('pengguna_kode', $_SESSION['id'])->get_all();
            if ($bags) {
                foreach ($bags as $bag_total) {
                    $hasil += (int)$bag_total->ca_tharga;
                }
            } else {
                $hasil = 0;
            }


            return (int)$hasil;
        };

        $diskon_harga = function () use ($total, $promo) {
            $harga = $total();
            $diskon = $promo;
            if ($diskon) {
                $promo_rate = $diskon->promo_rate;
                $promo_nominal = $diskon->promo_nominal;
            } else {
                $promo_rate = 0;
                $promo_nominal = 0;
            }

            if ($promo_rate != 0) {
                $potongan = $harga * ($promo_rate / 100);
                $hasil = $potongan;
            } elseif ($promo_nominal != 0) {
                $hasil = $promo_nominal;
            } else {
                $hasil = 0;
            }

            return $hasil;
        };

        $grand_total = function () use ($total, $promo) {

            $harga = $total();
            $diskon = $promo;
            if ($diskon) {
                $promo_rate = $diskon->promo_rate;
                $promo_nominal = $diskon->promo_nominal;
            } else {
                $promo_rate = 0;
                $promo_nominal = 0;
            }


            if ($promo_rate != 0) {
                $potongan = $harga * ($promo_rate / 100);
                $hasil = $harga - $potongan;

            } elseif ($promo_nominal != 0) {
                $potongan = $promo_nominal;
                $hasil = $harga - $potongan;
            } else {
                $hasil = $harga;
            }

            return $hasil;
        };


        $resp = array();

        $resp['bags'] = $bags();
        $resp['bags_promo_kode'] = $promo ? $promo->promo_nama : '';
        $resp['bags_promo_ket'] = $promo ? $promo->promo_ket : '';
        $resp['bags_promo_harga'] = $diskon_harga();
        $resp['bags_total'] = $total();
        $resp['bags_grand_total'] = $grand_total();
        $resp['bags_url'] = site_url('bag/checkout/with_promo/' . $resp['bags_promo_kode']);

        echo json_encode($resp, true);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */