<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-21
 * Time: 20:54
 */

class Admin extends MY_Controller{


    /**
     * Admin constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->acl->accessRedirect($this->activeUser, 'adminpanel', 'R');

        //sätter globals för adminmenyn
        if($this->acl->access($this->activeUser, 'groups', 'R')){
            $this->twig->addGlobal('adminMenuGroups', true);
        }

    }

    public function index(){
        $data['pageHeader'] = 'Administration';
        $this->twig->display('admin/index', $data);
    }

    public function groups(){
        $this->acl->accessRedirect($this->activeUser, 'groups', 'R');
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

        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
        $this->form_validation->set_message('required', 'Fältet "%s" är obligatostiskt!');

        if($this->input->post('type') == 'resources'){
            $this->form_validation->set_rules('resourceid', 'resourceid', 'required');
            if ($this->form_validation->run() !== FALSE)
            {
                $obj = new stdClass();
                $obj->crud = '';

                if($this->input->post('crudc') == 'on'){$obj->crud = $obj->crud.'C';}
                if($this->input->post('crudr') == 'on'){$obj->crud = $obj->crud.'R';}
                if($this->input->post('crudu') == 'on'){$obj->crud = $obj->crud.'U';}
                if($this->input->post('crudd') == 'on'){$obj->crud = $obj->crud.'D';}
                $obj->resourceid = $this->input->post('resourceid');
                $obj->groupid = $groupId;

                $this->group_model->editCRUD($obj);
            }
        }elseif($this->input->post('type') == 'search'){
            $this->form_validation->set_rules('input', 'Sökruta', 'required');
            if ($this->form_validation->run() !== FALSE)
            {
                $data['search'] = $this->user_model->search($this->input->post('input'));

            }
        }elseif($this->input->post('type') == 'addUser'){
            $users = $this->input->post('users');
            foreach($users as $user ){
                $objUser = $this->user_model->get($user);
                $objGroup = $this->group_model->get($groupId);
                $this->group_model->addUser($objGroup, $objUser);
            }
        }

        $data['group'] = $this->group_model->get($groupId);
        $data['pageHeader'] = 'Administrera grupp: '.$data['group']->getName();

        $data['users'] = $this->group_model->getUsers($data['group']);
        $data['resources'] = $this->group_model->getResources($data['group']);

        $this->twig->display('admin/group', $data);
    }
}
