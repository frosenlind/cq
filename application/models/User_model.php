<?php

/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-16
 * Time: 21:14
 */
class User_model extends CI_Model
{


    /**
     * 2016-01-24 - Working
     *
     * @param $userId
     * @return \entities\User
     */
    public function get($userId){

        try {
            if(intval($userId)){$id = 'id';}else{$id = 'email';}

            $query = $this->db->where($id, $userId)->get('users');
            if ($query->num_rows() !== 1) { throw new Exception('The user you are trying to find does not exist!'); }

            $user = new entities\User($query->row());
            return $user;

        } catch(Exception $err){
            log_message('error', 'User_model::get - Someone tried to fetch user with identification:'.$userId.' but that did not exist!');
            die($err->getMessage());
        }
    }

    public function save($user){

        $this->db->set('username', $user->getUsername());
        $this->db->set('password', $user->getPassword());
        $this->db->set('email', $user->getEmail());

        $this->db->where('id', $user->getId());
        $this->db->update('users');
        $affectedRows = $this->db->affected_rows();
        log_message('info', 'User_model::save - You updated the user '.$user->getId().' with '.$affectedRows.' affected rows.');
    }


}