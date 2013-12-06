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
        $this->assets['login_fb'] = $this->facebook->getLoginUrl(['scope' => 'email,offline_access,user_birthday,user_location,user_about_me,user_hometown', 'redirect_uri' => base_url('usuario/facebook_connect')]);

    }

    public function _checkUserExist($identify) {
        if (!$this->user_manager->email_exists($identify)) {
            return true;
        } else {
            $this->form_validation->set_message("_checkUserExist", '%s já cadastrado');
            return false;
        }
    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('home/index', $this->meta);
	}

    public function login()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('usuario/login', $this->meta);
    }

    public function recuperar()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('usuario/esqueceu', $this->meta);
    }

    public function cadastro()
    {
        $this->load->library('form_validation');
        $this->assets = addJS($this->assets, 'cadastro');
        $this->user->on_valid_session(base_url('home'));

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('sobrenome', 'Sobrenome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback__checkUserExist');
        $this->form_validation->set_rules('senha', 'Senha', 'required');

        $this->load->library('cep');
        $this->meta['estados'] = $this->cep->estados();

        if ($this->form_validation->run()) {
            $this->_cadastrar();
        }

        $this->meta['login_fb'] = $this->facebook->getLoginUrl(['scope' => 'email,offline_access,user_birthday,user_location,user_about_me,user_hometown', 'redirect_uri' => base_url('usuario/facebook_connect')]);

        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
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
                redirect(base_url('home/index'));
            }
        }

    }

    public function cadastro_sucesso()
    {
        $this->user->on_valid_session(base_url('home'));
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->load->view('usuario/cadastro_sucesso', $this->meta);
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
        redirect(base_url('usuario/cadastro_sucesso'));
    }

    public function ativacao($hashCode = null, $user = null)
    {
        if (!$hashCode || !$user)
            redirect(base_url('home'));

        if ($this->user_manager->activate($hashCode, $user))
        {
            $this->user->on_valid_session(base_url('home'));
            $this->meta['header'] = $this->load->view('header', $this->assets, true);
            $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
            $this->meta['footer'] = $this->load->view('footer', '', true);
            $this->load->view('usuario/registro_sucesso', $this->meta);
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