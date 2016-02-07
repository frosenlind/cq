<?php

/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-11
 * Time: 20:22
 */
class MY_Controller extends CI_Controller
{
    public $activeUser;

    function __construct(){
        parent::__construct();
        header('Content-type: text/html; charset=UTF-8');

        //get the composer autoload
        require_once '/vendor/autoload.php';

        //check if logged in, else send to logout
        $this->my_auth->isAuthorized();

        //get activeUser
        $this->activeUser = $this->user_model->get($this->session->id);

        //add globals to twig
        $this->twig->addGlobal('globalTitle', 'Cordis 4.0');
        $this->twig->addGlobal('baseUrl', base_url());
        $this->twig->addGlobal('siteUrl', site_url().'/');
        $this->twig->addGlobal('activeUser', $this->activeUser);

        //add admin link to menu
        if($this->acl->access($this->activeUser, 'adminpanel', 'R')){
            $this->twig->addGlobal('isAdmin', true);
        }

    }

}