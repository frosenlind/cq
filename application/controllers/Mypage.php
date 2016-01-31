<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-22
 * Time: 18:18
 */

class Mypage extends MY_Controller{

    public function index(){

        //load CI Resurces
        $this->load->model('user_model');
        $this->load->library('form_validation');

        //Set rules
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
        $this->form_validation->set_rules('pass', 'Nytt l�senord', 'required');
        $this->form_validation->set_rules('pass2', 'Repetera nytt l�senord', 'required|matches[pass]');
        $this->form_validation->set_message('required', 'F�ltet " %s " �r obligatostiskt!');
        $this->form_validation->set_message('matches', 'F�lten matchar inte!');

        if ($this->form_validation->run() == FALSE)
        {
            //load validation errors to twig
            $data['validation_errors'] = validation_errors();
            $this->twig->display('user/index', $data);
        }
        else
        {
            $this->activeUser->setPassword($this->my_auth->createPasswordHash($this->input->post('pass')));
            $this->user_model->save($this->activeUser);
            redirect(site_url('mypage'), 'refresh');
        }
    }
}