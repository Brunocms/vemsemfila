<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurantes extends CI_Controller {

    public $meta;
    public $data;
    public $assets;

    function __construct()
    {
        parent::__construct();
        $this->assets = loadAssets();
        $this->output->nocache();
    }

    public function index()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('restaurantes/index', $this->meta);
    }

    public function leads()
    {
        $this->assets = addJS($this->assets, 'leads');
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('restaurantes/leads', $this->meta);
    }

    public function reserva()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->load->view('restaurantes/reserva', $this->meta);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */