<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public $meta;
    public $assets;
    public $data;

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_usuario');
        $this->assets = loadAssets();
        $this->output->nocache();
        $this->assets['login_fb'] = $this->facebook->getLoginUrl(['scope' => 'email,offline_access,user_birthday,user_location,user_about_me,user_hometown', 'redirect_uri' => base_url('usuario/facebook_connect')]);

    }

	public function index()
	{
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
		$this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/index', $this->meta);
	}

    public function login()
    {
        $post = $this->input->post();
        if ($this->user->login($post))
            redirect(base_url('home'));
        $this->session->set_flashdata('info', 'Usuário ou senha incorretos');
        redirect('usuario/login');
    }

    public function recuperar()
    {

        if (!$this->input->post('email')){
            $this->session->set_flashdata('info', 'Você precisa entrar com um email');
            redirect(base_url('usuario/recuperar'));
        }

        $password = base64_encode(rand(0, 500));

        $this->load->library('user/bcrypt');

        $hash = $this->bcrypt->hash($password);

        $this->db->where(['email' => $this->input->post('email')]);
        $this->db->update('tb_usuario', ['senha' => $hash]);

        $this->load->library('email/sendemail');
        $emailData['password'] = $password;
        $emailData['template'] = 'forgotPass';
        $emailData['to'] = $this->input->post('email');
        $this->sendemail->sendSystemEmail($emailData);

        $this->session->set_flashdata('info', 'Um email foi enviado a você com uma nova senha');
        redirect('usuario/login');
    }

    public function fale_conosco()
    {
        $this->load->library('email/sendemail');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('assunto', 'Assunto', 'required');


        if ($this->form_validation->run()) {
            $this->_fale_conosco();
            $this->session->set_flashdata('info', 'Obrigado pelo contato!');
            redirect('fale_conosco');
        }


        $this->meta['header'] = $this->load->view('header',  $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/fale_conosco', $this->meta);
    }

    private function _fale_conosco() {

        $emailData['nome'] = $this->input->post('nome');
        $emailData['email'] = $this->input->post('email');
        $emailData['assunto'] = $this->input->post('assunto');
        $emailData['telefone'] = $this->input->post('telefone');
        $emailData['celular'] = $this->input->post('celular');
        $emailData['mensagem'] = $this->input->post('mensagem');
        $emailData['empresa'] = $this->input->post('empresa');
        $emailData['template'] = 'fale_conosco';
        $emailData['to'] = 'caio@videolog.tv';
        $this->sendemail->sendSystemEmail($emailData);


    }

    public function faq()
    {
        $this->meta['header'] = $this->load->view('header',  $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/faq', $this->meta);
    }

    public function como_funciona()
    {
        $this->meta['header'] = $this->load->view('header',  $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/como_funciona', $this->meta);
    }

    public function termos_de_uso()
    {
        $this->meta['header'] = $this->load->view('header',  $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/termos_de_uso', $this->meta);
    }

    public function quem_somos()
    {
        $this->meta['header'] = $this->load->view('header',  $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('home/quem_somos', $this->meta);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */