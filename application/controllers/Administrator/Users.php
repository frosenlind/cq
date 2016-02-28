<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-19
 * Time: 19:15
 */

class Users extends Admin_Controller{

    public function index(){
        $this->acl->accessRedirect($this->activeUser, 'users', 'R');
        $data['pageHeader'] = 'Användare';

        $data['users'] = $this->user_model->getAll();
        $this->twig->display('admin/user/users', $data);
    }

    public function newUser(){
        $this->acl->accessRedirect($this->activeUser, 'users', 'C');
        $data['pageHeader'] = 'Skapa ny användare';

        $data['users'] = $this->user_model->getAll();
        $this->twig->display('admin/user/newUser', $data);
    }

    public function newUserMember(){
        $this->acl->accessRedirect($this->activeUser, 'users', 'C');
        $this->load->model('matrikel_model');
        $data['pageHeader'] = 'Skapa ny användare från matrikel';

        $memberslist = array();
        $memberlistDb = $this->matrikel_model->findAll();

        foreach($memberlistDb as $member){
            if($this->user_model->findUserByOnr($member->getOnr()) === false){
                $memberslist[] = $member;
            }
        }

        $data['members'] = $memberslist;
        $this->twig->display('admin/user/newUserMember', $data);
    }

    public function createUser($onr){
        $this->load->model('matrikel_model');
        $member = $this->matrikel_model->get($onr);

        $parameters = new stdClass();
        $parameters->username = $member->getFornamn().' '.$member->getEfternamn();
        $parameters->password = '';
        $parameters->email = $member->getEpost();
        $parameters->onr = $member->getOnr();

        $newUser = new entities\User($parameters);

        $this->user_model->save($newUser);

        $userId = $this->user_model->findUserByOnr($onr);

        redirect(site_url('administrator/users/user/'.$userId), 'refresh');
    }

    public function User($userId=NULL){
        $this->acl->accessRedirect($this->activeUser, 'users', 'R');
        $this->load->library('form_validation');
        $this->load->model('matrikel_model');

        $data['pageHeader'] = 'Användare';
        $data['user'] = $this->user_model->get($userId);
        $data['groups'] = $this->user_model->findGroups($data['user']);

        //ACL TWIG Permissions
        if($this->acl->access($this->activeUser, 'users', 'U')){$data['ACL']['users']['U'] = true;}
        if($this->acl->access($this->activeUser, 'groups', 'R')){$data['ACL']['groups']['R'] = true;}
        if($this->acl->access($this->activeUser, 'matrikel', 'U') and $this->acl->access($this->activeUser, 'users', 'U')){$data['ACL']['matrikel']['U'] = true;}

        //switch for different postactions
        $post = $this->input->post('type');
        switch ($post) {

            case 'onr':
                $this->form_validation->set_rules('onr', 'ONR', 'required');
                if($this->form_validation->run() == TRUE) {
                    $data['formOnr'] = $this->changeOnr($data['user']);
                }
            break;

            case 'username':
                $this->form_validation->set_rules('username', 'Användarnamn', 'required');
                if($this->form_validation->run() == TRUE) {
                    $data['formUsername'] = $this->changeUsername($data['user']);
                }
            break;

            case 'email':
                $this->form_validation->set_rules('email', 'Ny E-post', 'required|valid_email');
                if($this->form_validation->run() == TRUE){
                    $data['formEmail'] = $this->changeEmail($data['user']);
                }
            break;

            case 'password':
                $this->form_validation->set_rules('pass', 'Nytt lösenord', 'required');
                $this->form_validation->set_rules('pass2', 'Repetera nytt lösenord', 'required|matches[pass]');
                if($this->form_validation->run() == TRUE) {
                    $data['formPassword'] = $this->changePassword($data['user']);
                }
            break;
        }

        //if form faild, send error
        if ($this->form_validation->run() == FALSE)
        {
            $data['validation_errors'] = validation_errors();
        }

        //ladda in denna variabeln här så det alltid är senaste.
        $data['fullname'] = $this->matrikel_model->findFullNameByOnr($data['user']->getOnr());

        $this->twig->display('admin/user/user', $data);
    }

    private function changePassword($objUser){
        if(!$this->acl->access($this->activeUser, 'users', 'U')){
            return false;
        }
        $objUser->setPassword($this->my_auth->createPasswordHash($this->input->post('pass')));
        $this->user_model->save($objUser);
        return true;
    }

    private function changeEmail($objUser){
        if(!$this->acl->access($this->activeUser, 'users', 'U')){
            return false;
        }
        $objUser->setEmail($this->input->post('email'));
        $this->user_model->save($objUser);
        return true;
    }

    private function changeUsername($objUser){
        if(!$this->acl->access($this->activeUser, 'users', 'U')){
            return false;
        }
        $objUser->setUsername($this->input->post('username'));
        $this->user_model->save($objUser);
        return true;
    }

    private function changeOnr($objUser){
        if(!$this->acl->access($this->activeUser, 'users', 'U') and !$this->acl->access($this->activeUser, 'matrikel', 'U')){
            return false;
        }
        $objUser->setOnr($this->input->post('onr'));
        $this->user_model->save($objUser);
        return true;
    }


}