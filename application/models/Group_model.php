<?php

/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-25
 * Time: 19:07
 */
class Group_model extends CI_Model
{


    /**
     * @param $groupId
     * @return \entities\Group
     */
    public function get($groupId){
        $groupId = intval($groupId);
        try {
            $query = $this->db->where('id', $groupId)->get('groups');
            if ($query->num_rows() != 1) { throw new Exception('The group you are trying to find does not exist!'); }

            $group = new entities\Group($query->row());
            return $group;

        } catch(Exception $err){
            log_message('error', 'Group_model::get - Someone tried to fetch group with identification:'.$groupId.' but that did not exist!');
            die($err->getMessage());
        }
    }


    /**
     * @param null $limit
     * @return \entities\Group array
     */
    public function getAll($limit = NULL){
        $users = array();
        $i = 0;

        try {
            if($limit !== NULL){$this->db->limit($limit);}
            $query = $this->db->get('groups');
            if ($query->num_rows() < 1) { throw new Exception('Did not find any groups'); }

            //CI gives us an array of objects
            $arrUsers = $query->result();

            //lets make them group objects
            foreach($arrUsers as $arrUser){
                $users[$i] = new entities\Group($arrUser);
                $i++;
            }
            return $users;

        } catch(Exception $err){
            log_message('error', 'Group_model::getAll - Someone tried to get all groups but there were none!');
            die($err->getMessage());
        }
    }


    /**
     * @param $group
     */
    public function save($group){

        try {
            //se if its update or new
            if ($group->getId() == 0) {
                //set all inputs
                $this->db->set('name', $group->getName());
                $this->db->set('description', $group->getdescription());
                $this->db->set('created', time());
                $this->db->insert('groups');

                $affectedRows = $this->db->affected_rows();
                if(is_null($affectedRows) or $affectedRows == 0){
                    log_message('error', 'Group_model::save - Could not create group'. $group->getName());
                    throw new Exception('Could not create group!');
                }
            } else {
                $this->db->where('id', $group->getId());
                $this->db->update('groups', $group);

                $affectedRows = $this->db->affected_rows();
                if(is_null($affectedRows) or $affectedRows == 0){
                    log_message('error', 'Group_model::save - Could not update group'. $group->getName());
                    throw new Exception('Could not update group!');
                }
            }
        }catch (Exception $err){
            die($err-getMessage());
        }

    }

}