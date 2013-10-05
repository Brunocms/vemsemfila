<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $meta;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_usuario');
        $this->user->on_invalid_session(base_url('home'));
        if (!$this->user_manager->user_permission($this->user->get_id(), 3))
            redirect(base_url('home'));
    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', '', true);
		$this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('admin/cadastro_rest', $this->meta);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */