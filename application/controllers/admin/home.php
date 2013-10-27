<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $meta;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_usuario']);
        $this->user->on_invalid_session(base_url('home'));
        if (!$this->user_manager->user_permission($this->user->get_id(), 3))
            redirect(base_url('home'));
    }

	public function index()
	{
        $this->meta = [
            'title' => 'Administração Vem sem fila'
        ];

        $this->data['content'] = $this->load->view('admin/home/index', $this->meta, true);
        $this->load->view('admin/base', $this->data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */