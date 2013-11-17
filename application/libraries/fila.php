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

    public function criarFilas($restaturante)
    {
        $query = $this->ci->db->get_where('tb_detalhe_restaurante', ['id_restaurante' => $restaturante]);

        foreach ($query->result() as $fila)
        {
            $data = [
                'id_restaurante' => $restaturante,
                'qnt_pessoas' => $fila->tipo_mesa,
                'turno' => 1,
                'dt_fila' => '3',
                'status' => 1
            ];

            $this->ci->db->insert('tb_fila', $data);
        }
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