<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_admin extends CI_Model{
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
}