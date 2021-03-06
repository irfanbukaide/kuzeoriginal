<?php
/**
 * Created by PhpStorm.
 * User: irfandihati
 * Date: 24/02/2018
 * Time: 18.01
 */

class Item_qty_m extends MY_Model
{
    public function __construct()
    {
        $this->table = 'item_qty';
        $this->primary_key = 'is_id';
        $this->protected = array('is_id', 'created_at', 'update_at');
        $this->has_one['item_detil'] = array(
            'foreign_model' => 'Item_detil_m',
            'foreign_table' => 'item_detil',
            'foreign_key' => 'item_detil_kode',
            'local_key' => 'item_detil_kode');
        $this->timestamps = TRUE;
        $this->soft_deletes = FALSE;
        parent::__construct();
    }

    public function guid()
    {
        if (function_exists('com_create_guid') === true)
            return trim(com_create_guid(), '{}');

        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}