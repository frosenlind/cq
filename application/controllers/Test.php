<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends MY_Controller {


    public function index()
    {

        $this->load->model('user');
        echo '<pre>';
        //print_r($this->user->getUser(1));
        echo '</pre>';

        //$data = new stdClass();
        $data['pageTitle'] = 'gfgd';

        $this->twig->display('outside',$data);
    }
}
