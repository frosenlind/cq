<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-17
 * Time: 20:33
 */

class Start extends MY_Controller {

    public function index(){
        $this->twig->display('start');
    }
}