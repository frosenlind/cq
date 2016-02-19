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
        $this->CI =& get_instance();
    }

    public function access($objUser, $strResource,$strCRUD = NULL){
        $CI =& get_instance();

        if($strCRUD == NULL){$strCRUD = 'R';}

        $userId = $objUser->getId();

        $query = $CI->db->from('users_groups as UG')->where('UG.userid', $userId)
            ->join('resources_groups as RG', 'RG.groupid = UG.groupid')
            ->join('resources as RE', 'RE.id = RG.resourceID')
            ->where('RE.name', $strResource)->get();

        if($query->num_rows() > 0){
            $dbCRUDs = $query->result();

            foreach($dbCRUDs as $dbCRUD) {
                if ($this->checkCRUD($dbCRUD->crud, $strCRUD)) {
                    return true;
                }
            }
        }

        return false;
    }


    public function accessRedirect($objUser, $strResource, $strCRUD = NULL, $logout = false){

        if(!$this->access($objUser, $strResource, $strCRUD)){

            //Lös snyggare!!!
            $this->CI->load->library('my_auth');
            if($logout){$this->CI->my_auth->logout();}
            redirect(site_url('error/error401'), 'refresh');
        }else{return true;}
    }

    private function checkCRUD($dbCRUD, $resCRUD){
        if(strrchr($dbCRUD, $resCRUD) === false){ return false;}else{return true;}
    }

}