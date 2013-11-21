<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class fila
 */

class Controle_Fila {

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

    public function retornaFila($fila)
    {
        $query = $this->ci->db->get_where('tb_fila', ['id_fila' => $fila, 'status' => 1]);

        if ($this->ci->db->affected_rows() == 0)
            return ['status' => false, 'error' => 'Fila não existe'];

        $data_fila = $query->result()[0];

        $this->ci->mongo_db->switch_db('restaurante_' . $data_fila->id_restaurante);
        $this->ci->mongo_db->order_by(['entrada' => 'asc']);
        $result = $this->ci->mongo_db->get('fila_' . $fila);
            return (count($result) == 0) ? ['status' => false, 'error' => 'No elements'] : $result;
    }

    public function novoElemento($restaurante, $fila)
    {
        $query = $this->ci->db->get_where('tb_fila', ['id_fila' => $fila, 'status' => 1]);

        if ($this->ci->db->affected_rows() == 0)
            return ['status' => false, 'error' => 'Fila não existe'];

        date_default_timezone_set('America/Sao_Paulo');
        $data = [
            'name' => 'Caio_' . rand(0, 40),
            'status' => 0,
            'qtd_pessoas' => rand(2,8),
            'entrada' => time()
        ];
        $this->ci->mongo_db->switch_db('restaurante_' . $restaurante);
        $this->ci->mongo_db->insert('fila_' . $fila, $data);

            return ['status' => true, 'error' => 'Elemento adicionado'];
    }

}