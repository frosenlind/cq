<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

    function __construct(){
        parent::__construct();

        //get the composer autoload
        require_once '/vendor/autoload.php';

        //add globals to twig
        $this->twig->addGlobal('globalTitle', 'Cordis 4.0');
        $this->twig->addGlobal('baseUrl', base_url());
        $this->twig->addGlobal('siteUrl', site_url().'/');

        //chef if guest, if guest set session guest
        $this->my_auth->isGuest();
    }


	public function index()
	{
        //load CI Resurces
        $this->load->library('form_validation');

        //Set rules
        $this->form_validation->set_error_delimiters('<span class="alert alert-danger">', '</span>');
        $this->form_validation->set_rules('email', 'E-post', 'required');
        $this->form_validation->set_rules('password', 'Lösenord', 'required|callback__check_login');
        $this->form_validation->set_message('required', 'Fältet %s är obligatostiskt');

        if ($this->form_validation->run() == FALSE)
        {
            //load validation errors to twig
            $data['validation_errors'] = validation_errors();
            $this->twig->display('outside',$data);
        }
        else
        {
            redirect(site_url('start'), 'refresh');
        }
	}

    public function _check_login(){

        //get post data
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //Felmeddelande fr�n metoden
        $this->form_validation->set_message('_check_login', 'Ditt användarnamn eller lösenord är fel!');

        if ($this->my_auth->login($email, $password)){
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        $this->my_auth->logout();
        redirect(site_url(), 'refresh');
    }
}
