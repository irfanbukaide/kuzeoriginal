<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['forgot'] = 'auth/forgot';
$route['logout'] = 'auth/logout';
$route['FAQ'] = 'FAQ';
$route['cari'] = 'pencarian';
$route['produk-terbaru'] = 'home/produkbaru';
$route['produk-terbaru/item/(:any)'] = 'home/item/$1';
$route['produk-terbaru/item/(:any)/detil'] = 'home/item/$1';
$route['produk-terbaru/item/(:any)/add_to_bag'] = 'bag/add';
$route['hot_item/item/(:any)'] = 'CategoryCtrl/get_hot_item/$1';
$route['hot_item/item/(:any)/detil'] = 'CategoryCtrl/get_hot_item/$1';
$route['hot_item/item/(:any)/add_to_bag'] = 'bag/add/$1';
$route['best_seller/item/(:any)'] = 'CategoryCtrl/get_item_bestseller/$1';
$route['best_seller/item/(:any)/detil'] = 'CategoryCtrl/get_item_bestseller/$1';
$route['best_seller/item/(:any)/add_to_bag'] = 'bag/add/$1';
$route['new_arrival/item/(:any)'] = 'CategoryCtrl/get_item_newarrival/$1';
$route['new_arrival/item/(:any)/detil'] = 'CategoryCtrl/get_item_newarrival/$1';
$route['new_arrival/item/(:any)/add_to_bag'] = 'bag/add/$1';
$route['sale_item/item/(:any)'] = 'CategoryCtrl/get_item_saleitem/$1';
$route['sale_item/item/(:any)/detil'] = 'CategoryCtrl/get_item_saleitem/$1';
$route['sale_item/item/(:any)/add_to_bag'] = 'bag/add/$1';
$route['category'] = 'CategoryCtrl';
$route['category/(:any)'] = 'CategoryCtrl/with/$1';
$route['category/all/item/(:any)'] = 'ItemCtrl/index';
$route['category/all/item/(:any)/detil'] = 'CategoryCtrl/get_item_detil_all/$1';
$route['category/(:any)/item/(:any)'] = 'CategoryCtrl/get_item_detil/$1/$2';
$route['category/(:any)/item/(:any)/detil'] = 'CategoryCtrl/get_item_detil/$1/$2';
$route['category/(:any)/item/(:any)/add_to_bag'] = 'bag/add';
$route['bag/(:any)/delete'] = 'bag/delete/$1';
$route['bag/checkout/with_promo/(:any)'] = 'bag/checkout_with_promo/$1';
$route['checkout/(:any)/shipping_address'] = 'AddressCtrl/get/$1';
$route['checkout/(:any)/shipping_address/simpan'] = 'AddressCtrl/simpan';
$route['checkout/(:any)/shipping_address/alamat_simpan'] = 'AddressCtrl/alamat_simpan';
$route['checkout/(:any)/ongkir_transfer'] = 'ongkir_transfer/get/$1';
$route['checkout/(:any)/ongkir_transfer/simpan'] = 'ongkir_transfer/simpan';
$route['checkout/(:any)/konfirmasi_pembayaran'] = 'konfirmasi/get/$1';
$route['checkout/(:any)/konfirmasi_pembayaran/simpan'] = 'konfirmasi/simpan';
$route['checkout/(:any)/sukses'] = 'konfirmasi/sukses';
$route['artikel/(:any)'] = 'artikel/get/$1';
$route['blog/(:any)'] = 'artikel/get/$1';
$route['resi/(:any)/detil'] = 'resi/get/$1';
$route['order_history/(:any)/detil'] = 'detil';
$route['order_status/(:any)/detil'] = 'detil';


// api
$route['api/bag'] = 'BagApiCtrl/bag_index';
$route['api/bag/promo/(:any)'] = 'BagApiCtrl/bag_promo/$1';
$route['api/home/new_arrival'] = 'HomeApiCtrl/new_arrival';
$route['api/home/new_arrival'] = 'HomeApiCtrl/new_arrival';

// api item
$route['api/item/knew_arrival'] = 'ItemApiCtrl/knew_arrival';
$route['api/item/kbest_seller'] = 'ItemApiCtrl/kbest_seller';
$route['api/item/kbest_seller'] = 'ItemApiCtrl/kbest_seller';
$route['api/item/ksale_item'] = 'ItemApiCtrl/ksale_item';

// api category
$route['api/category/menu'] = 'CategoryApiCtrl/json_menu';
$route['api/category/item_all'] = 'CategoryApiCtrl/json_item_all';
$route['api/category/item_category/(:any)'] = 'CategoryApiCtrl/json_item_category/$1';
$route['api/category/item_image'] = 'CategoryApiCtrl/json_item_image';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
