<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-27
 * Time: 20:26
 */

class User_group_model extends CI_Model
{

    public function getUsers($objGroup){
        $this->load->model('user_model');
        $users = array();
        $i = 0;

        try {
            $query = $this->db->where('groupid', $objGroup->getId())->get('users_groups');
            if($query->num_rows() == 0){throw new Exception('The group did not have any users'); }

            //CI gives us an array of objects
            $arrUsersGroups = $query->result();

            //lets make them group objects
            foreach($arrUsersGroups as $arrUserGroup){
                $users[$i] = $this->user_model->get($arrUserGroup->userid);
                $i++;
            }
            return $users;
        }catch(Exception $err){
            log_message('info', 'User_group_model::getUsers - '.$err->getMessage());
            return $users;
        }

    }

}