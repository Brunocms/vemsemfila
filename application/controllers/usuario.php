<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public $meta;

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
     *
     *
	 */

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_usuario');
        $this->load->library(['user/user', 'user/user_manager']);
    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('home/index', $this->meta);
	}

    public function cadastro()
    {

        if ($this->input->post('nome') != null)
            $this->_cadastrar();

        $user = $this->facebook->getUser();


        if ($user) {
            try {
                $this->meta['user_profile'] = $this->facebook->api('/me');
                $this->meta['endereco'] = explode(',' , $this->meta['user_profile']['hometown']['name']);
            } catch (FacebookApiException $e) {
                echo 'nem ta';
            }
        }

        $this->meta['login_fb'] = $this->facebook->getLoginUrl();

        $this->meta['header'] = $this->load->view('header', '', true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('usuario/cadastro', $this->meta);
    }

    private function _cadastrar()
    {
        $this->user_manager->save_user($this->input->post());
        redirect(base_url('home/index'));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */