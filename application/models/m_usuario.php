<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_usuario extends CI_Model{
    /**
     * El Contructor!
     */
    public function __construct(){
        parent::__construct();
    }

    public function grupo($where, $limite = 5, $offset = 0)
    {
        $this->db->select('id_usuario, nome');
        $this->db->from('tb_usuario');
        $this->db->where($where);
        $this->db->limit($limite, $offset);
        $query = $this->db->get();

        return $query->result();
    }

    public function cadastro($data)
    {
        error_reporting(0);
        if ($data['nascimento'] != null)
        {
            $nascimento = explode('/' , $data['nascimento']);
            $novaData = $nascimento[2] . '/' . $nascimento[1] . '/' . $nascimento[0];
        }
        $input = [
            'nome' => $data['nome'],
            'email' => $data['email'],
            'tel' => $data['tel'],
            'cep' => $data['cep'],
            'logradouro' => $data['logradouro'],
            'uf' => $data['uf'],
            'cidade' => $data['cidade'],
            'bairro' => $data['bairro'],
            'senha' => md5($data['senha']),
            'sexo' => $data['sexo'],
            'tipo_endereco' => $data['tipo_endereco'],
            'data_nascimento' => $novaData,
            'observacao' => $data['obs']
        ];

        $this->db->insert('tb_usuario', $input);

    }

    public function login($email, $password){

        $where = [
            "email" => $email,
            'password' => md5($password)
        ];

        //recupera o usuário com os dados passados
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($where);
        $query = $this->db->get();
        $user = $query->result();

        //Validações de usuário
        if ($this->db->affected_rows() == 0)
            return false;

        //gera o resultado com merge de arrays
        return $user[0];
    }
}