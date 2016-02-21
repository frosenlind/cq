<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-14
 * Time: 15:30
 */

class Admin_ajax extends MY_Controller{

    public function ajax_removeUserFromGroup(){

        if($this->acl->access($this->activeUser, 'groupuser', 'D')) {
            $userid = intval($this->input->post('userid'));
            $groupid = intval($this->input->post('groupid'));

            $group = $this->group_model->get($groupid);
            $user = $this->user_model->get($userid);


            $this->group_model->removeUser($group, $user);
        }else{
            return $this->output->set_status_header(401);
        }
    }
}