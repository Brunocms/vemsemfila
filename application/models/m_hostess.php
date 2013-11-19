<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_hostess extends CI_Model{
    /**
     * El Contructor!
     */
    public function __construct(){
        parent::__construct();
    }

    public function carregar_filas($restaurante)
    {
        $query = $this->db->get_where('tb_fila', ['id_restaurante' => $restaurante, 'status' => 1]);

        return ($this->db->affected_rows() == 0) ? false : $query->result();
    }

}