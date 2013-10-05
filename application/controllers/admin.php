<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public $meta;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_usuario', 'm_admin']);
        $this->user->on_invalid_session(base_url('home'));
        if (!$this->user_manager->user_permission($this->user->get_id(), 3))
            redirect(base_url('home'));

        $this->meta['admin_sidebar'] = $this->load->view('admin/admin_sidebar', '', true);
    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', '', true);
		$this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('admin/index', $this->meta);
	}

    public function restaurante($action = null)
    {
        if($action == 'new' && $this->m_admin->novo_restaurante($this->input->post()))
            redirect(base_url('admin/restaurante'));


        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , '', true);
        $this->load->view('admin/cadastro_rest', $this->meta);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */