<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-21
 * Time: 20:54
 */

class Admin extends MY_Controller{

    public function index(){
        $data['pageHeader'] = 'Administration';
        $this->twig->display('admin/index', $data);
    }

    public function groups(){
        //load CI Resurces
        $this->load->library('form_validation');
        $this->load->model('group_model');


        $data['pageHeader'] = 'Administrera grupper';
        $data['groups'] = $this->group_model->getAll();

        //Set rules
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
        $this->form_validation->set_rules('name', 'Namn', 'required');
        $this->form_validation->set_rules('description', 'Beskrivning', 'required');
        $this->form_validation->set_message('required', 'Fältet "%s" är obligatostiskt!');

        if ($this->form_validation->run() == FALSE)
        {
            //load validation errors to twig
            $data['validation_errors'] = validation_errors();
            $this->twig->display('admin/groups', $data);
        }
        else
        {

            $arg = new stdClass();
            $arg->name = $this->input->post('name');
            $arg->description = $this->input->post('description');
            $newgroup = new \entities\Group($arg);

            $this->group_model->save($newgroup);
            redirect(site_url('admin/groups'), 'refresh');
        }
    }

    public function group($groupId){
        $this->load->model('group_model');
        $this->load->model('user_group_model');
        //$this->load->model('resources_model');
        $this->load->library('acl');

        $data['group'] = $this->group_model->get($groupId);
        $data['pageHeader'] = 'Administrera grupp: '.$data['group']->getName();

        $data['users'] = $this->user_group_model->getUsers($data['group']);
        //$data['resources'] = $this->resources_model->getAll();
        $data['resources'] = $this->acl->getResourcesForGroup($data['group']);

        $this->twig->display('admin/group', $data);
    }
}