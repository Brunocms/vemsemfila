<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class fila
 */

class fila {

    public $ci;

    function __construct()
    {
        $this->ci = & get_instance();
        $this->ci->load->library('Mongo_db');
    }

    public function criarFila($restaturante)
    {

    }

    public function novoElemento()
    {
        $data = [
            'id_usuario' => 1,
            'status' => 0,
            'entrada' => '11:11:11'
        ];
        $this->ci->mongo_db->switch_db('novo_dbs');
        $this->ci->mongo_db->insert('restaurante_1', $data);
    }

}