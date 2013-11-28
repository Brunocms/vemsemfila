<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller da API
 */

require(APPPATH . 'libraries/REST_Controller.php');

class locais extends REST_Controller {

    public $metadata;

    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        $this->load->library(['cep']);
        $this->output->nocache();
    }

    function estados_get()
    {
       $response = $this->cep->estados();
       $this->response($response);
    }

    function cidades_get()
    {
        $estado = $this->get('cidades');

        $response = $this->cep->cidades($estado);

        $this->response($response);
    }

    function bairros_get()
    {
        $cidade = $this->get('bairros');
        $response = $this->cep->bairros($cidade);
        $this->response($response);
    }

}