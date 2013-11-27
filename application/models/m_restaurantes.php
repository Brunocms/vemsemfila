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
        $mesas = explode("," , $insert['mesas']);
        unset($insert['mesas']);

        $this->db->insert('tb_restaurante', $insert);
        $id_restaurante = $this->db->insert_id();

        foreach ($mesas as $value){
            $this->db->insert('tb_detalhe_restaurante', ['id_restaurante' => $id_restaurante, 'tipo_mesa' => $value]);
        }
        return $id_restaurante;
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

    public function carregar_mesas($restaurante)
    {
        $query = $this->db->get_where('tb_detalhe_restaurante', ['id_restaurante' => $restaurante]);

        return ($this->db->affected_rows() == 0) ? false : $query->result();
    }

    public function restaurante($id)
    {
        $this->db->select('*');
        $this->db->from('tb_restaurante as r');
        $this->db->where(['id_restaurante' => $id]);
        $query = $this->db->get();

        return $query->result()[0];
    }
}