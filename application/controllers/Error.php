<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-06
 * Time: 16:56
 */

class Error extends MY_Controller{

        public function error401(){
        $this->twig->display('errors/401');
    }
}