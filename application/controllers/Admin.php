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

    public function group($groupId = NULl){
        $this->load->model('group_model');
        $this->load->library('form_validation');
        $this->load->library('acl');

        $this->form_validation->set_rules('resourceid', 'resourceid', 'required');
        if ($this->form_validation->run() !== FALSE)
        {
            $obj = new stdClass();
            $obj->c = $obj->r = $obj->u = $obj->d = 0;

            if($this->input->post('crudc') == 'on'){$obj->c = 1;}
            if($this->input->post('crudr') == 'on'){$obj->r = 1;}
            if($this->input->post('crudu') == 'on'){$obj->u = 1;}
            if($this->input->post('crudd') == 'on'){$obj->d = 1;}
            $obj->resourceid = $this->input->post('resourceid');
            $obj->groupid = $groupId;

            $this->group_model->editCRUD($obj);
        }

        $data['group'] = $this->group_model->get($groupId);
        $data['pageHeader'] = 'Administrera grupp: '.$data['group']->getName();

        $data['users'] = $this->group_model->getUsers($data['group']);
        //$data['resources'] = $this->resources_model->getAll();
        $data['resources'] = $this->group_model->getResources($data['group']);

        $this->twig->display('admin/group', $data);
    }
}
