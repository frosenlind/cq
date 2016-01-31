<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 17:13
 */

class Acl {

    var $CI;

    public function __construct(){


    }

    public function getResourcesForGroup($group){

        $CI =& get_instance();

        $query = $CI->db->select('*')
                ->from('resources AS re')
                ->join('resources_groups AS rg', 're.id = rg.resourceid', 'FULL OUTER JOIN')
                //->where('rg.groupid', $group->getId())
                ->get();

        return $query->result();
    }
}