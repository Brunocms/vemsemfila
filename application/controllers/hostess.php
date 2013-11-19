<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hostess extends CI_Controller {

    public $meta;
    public $data;
    public $assets;

    function __construct()
    {
        parent::__construct();
        $this->assets = loadAssets();
        $this->output->nocache();
        $this->load->model('m_hostess');
    }

    public function index($restaurante)
    {
        $this->data['filas'] = $this->m_hostess->carregar_filas($restaurante);

        if (!$this->data['filas'])
            redirect('hostess/abrir_fila/' . base64_encode($restaurante));

        $this->meta['content'] = $this->load->view('hostess/fila', $this->data, true);
        $this->load->view('hostess/base', $this->meta);
    }

    public function abrir_fila($hash_restaurante = null)
    {
        if ($hash_restaurante != null)
            $this->_abrir_filas(base64_decode($hash_restaurante));

        $this->meta['content'] = $this->load->view('hostess/abrir_fila', $this->data, true);
        $this->load->view('hostess/base', $this->meta);
    }

    public function novocara($fila)
    {
        $this->load->library('controle_fila');
        $this->controle_fila->novoElemento($fila);
    }

    private function _abrir_filas($restaurante)
    {
        $this->load->library('controle_fila');
        $this->controle_fila->criarFilas($restaurante);
        redirect('hostess');
    }

    public function clientes()
    {
        $this->meta['content'] = $this->load->view('hostess/clientes', $this->data, true);
        $this->load->view('hostess/base', $this->meta);
    }

    public function reservas()
    {
        $this->meta['content'] = $this->load->view('hostess/reservas', $this->data, true);
        $this->load->view('hostess/base', $this->meta);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */