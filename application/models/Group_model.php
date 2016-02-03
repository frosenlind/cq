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

    public function getResources($group){
        $i = 0;
        $return_array = array();

        $query = $this->db->get('resources');
        $resource_array = $query->result_array();

        foreach($resource_array as $resource){

            $obj = new stdClass();
            $obj->id = $resource['id'];
            $obj->name = $resource['name'];
            $obj->groupid = $group->getId();
            $obj->crudc = '0';
            $obj->crudr = '0';
            $obj->crudu = '0';
            $obj->crudd = '0';

            $query2 = $this->db->select('*')->from('resources_groups as rg')
                ->where('rg.groupid', $group->getId())
                ->where('rg.resourceid', $resource['id'])->get();

            if($query2->num_rows() == 1){
                $obj->crudc = substr($query2->row()->crud,0,1);
                $obj->crudr = substr($query2->row()->crud,1,1);
                $obj->crudu = substr($query2->row()->crud,2,1);
                $obj->crudd = substr($query2->row()->crud,3,1);
            }

            //Hårdkodat - groupId = 1 = Superadmin. Visa bara resurser om det är superadmin
            if($obj->id == 1){
                if($obj->groupid == 1){
                    $return_array[$i] = $obj;
                }
            }else {
                $return_array[$i] = $obj;
            }
            $i++;
        }
        return $return_array;
    }

    public function editCRUD($obj){
        $crud = $obj->c.$obj->r.$obj->u.$obj->d;
        $this->db->set('crud', $crud);
        if($this->db->where('groupid', $obj->groupid)->where('resourceid', $obj->resourceid)->get('resources_groups')->num_rows() == 1) {
            $this->db->where('groupid', $obj->groupid)->where('resourceid', $obj->resourceid);
            $this->db->update('resources_groups');
        }else{
            $this->db->set('groupid', $obj->groupid);
            $this->db->set('resourceid', $obj->resourceid);
            $this->db->set('created', time());
            $this->db->insert('resources_groups');
        }
    }

    public function addUser($group, $user){
        $query = $this->db->where('userid', $user->getId())->where('groupid', $group->getId())->get('users_groups');
        if($query->num_rows() == 0) {
            $data = array(
                'userid' => $user->getId(),
                'groupid' => $group->getId(),
                'created' => time()
            );
            $this->db->insert('users_groups', $data);
        }
    }
}