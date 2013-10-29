<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public $meta;
    public $assets;

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_usuario');
        $this->assets = loadAssets();
        $this->output->nocache();
    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('home/index', $this->meta);
	}

    public function cadastro()
    {
        $this->assets = addJS($this->assets, 'cadastro');
        $this->user->on_valid_session(base_url('home'));

        if ($this->input->post('nome') != null)
            $this->_cadastrar();

        $this->meta['login_fb'] = $this->facebook->getLoginUrl(['scope' => 'email,offline_access,user_birthday,user_location,user_about_me,user_hometown', 'redirect_uri' => base_url('usuario/facebook_connect')]);

        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', '', true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('usuario/cadastro', $this->meta);
    }

    public function facebook_connect()
    {
        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $this->_cadastrar_facebook($this->facebook->api('/me'));
            } catch (FacebookApiException $e) {
                //echo 'nem ta';
            }
        }

    }

    private function _cadastrar_facebook($data)
    {
        $post['nome'] = $data['name'];
        $post['senha'] = base64_encode($data['email']);
        $post['method'] = 'facebook';
        $post['email'] = $data['email'];
        $this->user_manager->save_user($post);
        $this->user->login($post);
        redirect(base_url('home/index'));
    }

    private function _cadastrar()
    {
        $this->user_manager->save_user($this->input->post());
        redirect(base_url('home/index'));
    }

    public function ativacao($hashCode = null, $user = null)
    {
        if (!$hashCode || !$user)
            redirect(base_url('home'));

        if ($this->user_manager->activate($hashCode, $user))
        {
            echo 'ativado!';
        }else{
            echo 'dados incorretos!';
        }
    }

    public function logout()
    {
        $this->user->destroy_user();
        redirect(base_url('home'));
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */