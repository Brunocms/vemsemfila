<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurantes extends CI_Controller {

    public $meta;
    public $data;

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', '', true);
		$this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('restaurantes/index', $this->meta);
	}

    public function login()
    {
        $post = $this->input->post();
        if ($this->user->login($post))
            redirect(base_url('home'));
        echo 'nofoe';
    }

    public function reserva()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->load->view('restaurantes/reserva', $this->meta);
    }

    public function fale_conosco()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('home/fale_conosco', $this->meta);
    }

    public function faq()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('home/faq', $this->meta);
    }

    public function como_funciona()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('home/como_funciona', $this->meta);
    }

    public function termos_de_uso()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('home/termos_de_uso', $this->meta);
    }

    public function quem_somos()
    {
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('home/quem_somos', $this->meta);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */