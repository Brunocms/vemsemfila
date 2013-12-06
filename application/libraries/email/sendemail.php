<?php
/*
 * Biblioteca de manipulação dos emails padrão do Videolog.
 * Utiliza outra bilbioteca, SimpleEmailService, que faz a
 * manipulação direta da Amazon SES
 *
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class sendemail {

    public $client;
    public $ci;
    public $emailData = [];

    function __construct(){
        //força o carregamento da instância do CI
        $this->ci = & get_instance();

        //carrega a biblioteca da cdn
        $this->ci->load->library('email/SimpleEmailService');

        $this->client = new SimpleEmailService('AKIAI6B6QQTAHHMDNKCA','axqJ0DFM7uAQFDPx6a0ofDq9BbDcTvnIvsKhI1Z8');

    }

    function sendSystemEmail($emailData){
        $templates = [
            'welcome' => [
                'subject' => 'Bem Vindo!',
                'body' => 'welcome'
            ],
            'resendActivate' => [
                'subject' => 'Bem Vindo!',
                'body' => 'usuario/resend_welcome'
            ],
            'forgotPass' => [
                'subject' => 'Senha temporaria',
                'body' => 'resend_password'
            ],
            'welcome_facebook' => [
                'subject' => 'Bem Vindo!',
                'body' => 'welcome_facebook'
            ]
        ];

        $this->emailData = $emailData;
        $template = $this->emailData['template'];

        $body = $this->ci->load->view('/base/emails/' . $templates[$template]['body'] . '.php', $this->emailData, true);
        $subject = $templates[$template]['subject'] . ' - ';

        $m = new SimpleEmailServiceMessage();



        $m->addTo($emailData['to']);
        $m->setFrom($this->client->listVerifiedEmailAddresses()['Addresses'][0]);
        $m->setSubject($subject);
        $m->setMessageFromString('', $body);
        $this->client->sendEmail($m);

        return;
    }


}