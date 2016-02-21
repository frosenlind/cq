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

        //ACL TWIG Permissions
        //if($this->acl->access($this->activeUser, 'users', 'U')){$data['ACL']['users']['U'] = true;}


        $data['users'] = $this->user_model->getAll();
        $this->twig->display('admin/users', $data);
    }

    public function User($userId=NULL){
        $this->acl->accessRedirect($this->activeUser, 'users', 'R');
        $this->load->library('form_validation');

        $data['pageHeader'] = 'Användare';
        $data['user'] = $this->user_model->get($userId);
        $data['groups'] = $this->user_model->findGroups($data['user']);

        //ACL TWIG Permissions
        if($this->acl->access($this->activeUser, 'users', 'U')){$data['ACL']['users']['U'] = true;}
        if($this->acl->access($this->activeUser, 'groups', 'R')){$data['ACL']['groups']['R'] = true;}

        //switch for different postactions
        $post = $this->input->post('type');
        switch ($post) {

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

        $this->twig->display('admin/user', $data);
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


}