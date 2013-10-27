<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurantes extends CI_Controller {

    public $meta;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model(['m_usuario', 'm_restaurantes']);
        $this->user->on_invalid_session(base_url('home'));
        if (!$this->user_manager->user_permission($this->user->get_id(), 3))
            redirect(base_url('home'));
    }

    public function index()
    {
        $this->meta = [
            'title' => 'Administração Vem sem fila'
        ];

        $this->meta['restaurantes'] = $this->m_restaurantes->lista_restaurantes();
        $this->data['content'] = $this->load->view('admin/restaurantes/index', $this->meta, true);
        $this->load->view('admin/base', $this->data);
    }

	public function cadastro($restaurante = null)
	{
        $this->meta = [
            'title' => 'Administração Vem sem fila'
        ];

        if ($this->input->post())
            $this->m_restaurantes->novo_restaurante($this->input->post());

        if ($restaurante != null)
            $this->meta['restaurante'] = $this->m_restaurantes->restaurante($restaurante);

        $this->data['content'] = $this->load->view('admin/restaurantes/cadastro', $this->meta, true);
        $this->load->view('admin/base', $this->data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */