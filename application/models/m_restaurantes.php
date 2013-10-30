<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_restaurantes extends CI_Model{
    /**
     * El Contructor!
     */
    public function __construct(){
        parent::__construct();
    }

    public function novo_restaurante($insert)
    {
        $this->db->insert('tb_restaurante', $insert);
        return true;
    }

    public function lista_restaurantes($where = null, $limit = null)
    {
        $this->db->select('*');
        $this->db->from('tb_restaurante');
        if ($where != null) $this->db->where($where);
        if ($limit != null) $this->db->limit($limit);
        $query = $this->db->get();

        return $query->result();
    }

    public function novo_lead($data)
    {
        $this->db->insert('tb_leads', $data);
        return true;
    }

    public function restaurante($id)
    {
        $this->db->select('*');
        $this->db->from('tb_restaurante');
        $this->db->where(['id_restaurante' => $id]);
        $query = $this->db->get();

        return $query->result()[0];
    }
}