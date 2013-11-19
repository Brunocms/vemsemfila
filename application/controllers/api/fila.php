<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller da API
 */

require(APPPATH . 'libraries/REST_Controller.php');

class Fila extends REST_Controller {

    public $metadata;

    public function __construct()
    {
        parent::__construct();
        header('Access-Control-Allow-Origin: *');
        $this->load->library(['controle_fila']);
        $this->output->nocache();
    }

    function index_get()
    {
       $fila = $this->get('fila');
       $response = $this->controle_fila->retornaFila($fila);
       $this->response($response);
    }

}