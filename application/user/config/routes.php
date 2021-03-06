<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeCtrl';
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['forgot'] = 'auth/forgot';
$route['logout'] = 'auth/logout';
$route['FAQ'] = 'FAQ';
$route['search'] = 'SearchCtrl';
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
$route['category/all/item/(:any)'] = 'ItemCtrl/get_item_from_url/$1';
$route['category/all/item/(:any)/detil'] = 'ItemCtrl/get_item_from_url/$1';
$route['category/(:any)/item/(:any)'] = 'ItemCtrl/get_item_from_url/$2';
$route['category/(:any)/item/(:any)/detil'] = 'ItemCtrl/get_item_from_url/$2';
$route['category/(:any)/item/(:any)/add_to_bag'] = 'bag/add';
$route['item/(:any)'] = 'ItemCtrl/get_item_from_url/$1';
$route['item/(:any)/add_to_bag'] = 'BagCtrl/add';
$route['bag'] = 'BagCtrl';
$route['bag/modal_bag'] = 'BagCtrl/modal_bag';
$route['bag/(:any)/delete'] = 'BagCtrl/delete/$1';
$route['bag/checkout'] = 'BagCtrl/checkout';
$route['bag/checkout/with_promo/(:any)'] = 'BagCtrl/checkout_with_promo/$1';
$route['checkout/(:any)/shipping_address'] = 'AddressCtrl/get/$1';
$route['checkout/(:any)/shipping_address/simpan'] = 'AddressCtrl/simpan';
$route['checkout/(:any)/shipping_address/alamat_simpan'] = 'AddressCtrl/alamat_simpan';
$route['checkout/(:any)/ongkir_transfer'] = 'ongkir_transfer/get/$1';
$route['checkout/(:any)/ongkir_transfer/simpan'] = 'ongkir_transfer/simpan';
$route['checkout/(:any)/payment_confirm'] = 'PaymentConfirmCtrl/get/$1';
$route['checkout/(:any)/payment_confirm/simpan'] = 'PaymentConfirmCtrl/simpan';
$route['checkout/(:any)/success'] = 'PaymentConfirmCtrl/success';
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
$route['api/item/new_arrival'] = 'ItemApiCtrl/new_arrival';
$route['api/item/knew_arrival'] = 'ItemApiCtrl/knew_arrival';
$route['api/item/kbest_seller'] = 'ItemApiCtrl/kbest_seller';
$route['api/item/best_seller'] = 'ItemApiCtrl/best_seller';
$route['api/item/ksale_item'] = 'ItemApiCtrl/ksale_item';
$route['api/item/sale_item'] = 'ItemApiCtrl/sale_item';

// api image
$route['api/image/slide'] = 'ImageApiCtrl/slide';
$route['api/image/billboard'] = 'ImageApiCtrl/billboard';

// api category
$route['api/category/menu'] = 'CategoryApiCtrl/json_menu';
$route['api/category/item_all'] = 'CategoryApiCtrl/json_item_all';
$route['api/category/item_category/(:any)'] = 'CategoryApiCtrl/json_item_category/$1';
$route['api/category/item_image'] = 'CategoryApiCtrl/json_item_image';


// api search
$route['api/search'] = 'SearchApiCtrl';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
