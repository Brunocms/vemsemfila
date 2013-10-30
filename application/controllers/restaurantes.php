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
        $this->load->model('m_restaurantes');
        $this->assets['login_fb'] = $this->facebook->getLoginUrl(['scope' => 'email,offline_access,user_birthday,user_location,user_about_me,user_hometown', 'redirect_uri' => base_url('usuario/facebook_connect')]);

    }

    public function index()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('restaurantes/index', $this->meta);
    }

    public function leads()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required');

        if ($this->form_validation->run()) {
            $this->_novoLead();
        }

        $this->assets = addJS($this->assets, 'leads');
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo' , $this->assets, true);
        $this->load->view('restaurantes/leads', $this->meta);
    }

    private function _novoLead()
    {
        $post = $this->input->post();
        $data = [
            'nome' => $post['nome'],
            'email1' => $post['email1'],
            'email2' => $post['email2'],
            'tel1' => $post['tel1'],
            'tel2' => $post['tel2'],
            'pais' => $post['pais'],
            'estado' => $post['estado'],
            'cidade' => $post['cidade'],
            'bairro' => $post['bairro'],
            'observacao' => $post['observacao']
        ];
        $this->m_restaurantes->novo_lead($data);

        redirect(base_url('home'));

        return;
    }

    public function reserva()
    {
        $this->meta['header'] = $this->load->view('header', $this->assets, true);
        $this->meta['footer'] = $this->load->view('footer', '', true);
        $this->meta['topo'] = $this->load->view('topo', $this->assets, true);
        $this->load->view('restaurantes/reserva', $this->meta);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */