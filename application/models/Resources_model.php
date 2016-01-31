<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 16:31
 */

class Resources_model extends CI_Model{


    public function getAll($limit = NULL){
        $resources = array();
        $i = 0;

        try {
            if($limit !== NULL){$this->db->limit($limit);}
            $query = $this->db->get('resources');
            if ($query->num_rows() < 1) { throw new Exception('Did not find any resources'); }

            //CI gives us an array of objects
            $arrResources = $query->result();

            //lets make them group objects
            foreach($arrResources as $arrResource){
                $resources[$i] = new entities\Resource($arrResource);
                $i++;
            }
            return $resources;

        } catch(Exception $err){
            log_message('error', 'Resource_model::getAll - Someone tried to get all resources but there were none!');
            die($err->getMessage());
        }
    }

    public function save($resource){

        try {
            //se if its update or new
            if ($resource->getId() == 0) {
                //set all inputs
                $this->db->set('name', $resource->getName());
                $this->db->set('created', time());
                $this->db->insert('resources');

                $affectedRows = $this->db->affected_rows();
                if(is_null($affectedRows) or $affectedRows == 0){
                    log_message('error', 'Resource_model::save - Could not create resource'. $resource->getName());
                    throw new Exception('Could not create resource!');
                }
            } else {
                $this->db->where('id', $resource->getId());
                $this->db->update('resources', $resource);

                $affectedRows = $this->db->affected_rows();
                if(is_null($affectedRows) or $affectedRows == 0){
                    log_message('error', 'Resource_model::save - Could not update resource'. $resource->getName());
                    throw new Exception('Could not update resource!');
                }
            }
        }catch (Exception $err){
            die($err-getMessage());
        }

    }
}