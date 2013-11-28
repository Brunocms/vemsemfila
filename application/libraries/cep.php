<?php

/**
 * Class CEP Cidade - Estado - País - Bairro
 */


class CEP {

    public $ci;

    function __construct()
    {
        $this->ci = & get_instance();
    }

    public function estados(){
        $this->ci->db->select('*');
        $this->ci->db->from('uf');
        $result = $this->ci->db->get();

        return $result->result();
    }

    public function cidades($estado){
        $this->ci->db->select('*');
        $this->ci->db->from('cidades');
        $this->ci->db->where(['cd_uf' => $estado]);
        $result = $this->ci->db->get();

        return $result->result();
    }

    public function bairros($cidade){
        $this->ci->db->select('*');
        $this->ci->db->from('bairros');
        $this->ci->db->where(['cd_cidade' => $cidade]);
        $result = $this->ci->db->get();

        return $result->result();
    }

}