<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-21
 * Time: 14:59
 */

class Matrikel extends Admin_Controller{

    public function index(){
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'R');
        $data['pageHeader'] = 'Matrikel';

        //ACL TWIG Permissions
        if($this->acl->access($this->activeUser, 'matrikel', 'C')){$data['ACL']['matrikel']['C'] = true;}

        $this->twig->display('admin/matrikel/index', $data);
    }

    public function do_upload()
    {
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'C');

        $time = time();
        $config['upload_path']          = './uploads/matrikel/';
        $config['allowed_types']        = 'csv';
        $config['max_size']             = 2000;
        $config['file_name']            = 'matrikel_'.$time;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('matrikelFile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $error = implode(';', $error);
            log_message('error', $error);
            die($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            redirect(site_url('administrator/matrikel/matrikelCheck1/'.$data['upload_data']['file_name']), 'refresh');
        }
    }

    public function matrikelCheck1($filename){
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'C');
        $path = 'uploads/matrikel/';

        $i = 0;
        $fh = fopen($path.$filename, 'r');
        $lines = array();
        while( ($row = fgetcsv($fh, 0, ';')) !== FALSE ) {
            //remove first row
            if($i != 0){$lines[] = $row;}
            $i++;
        }

        $data['lines'] = $lines;
        $data['filename'] = $filename;

        $this->twig->display('admin/matrikel/matrikelcheck1', $data);
    }

    public function matrikelCheck2($filename){
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'C');
        $this->load->model('matrikel_model');
        $path = 'uploads/matrikel/';
        $update = array();
        $new = array();

        $i = 0;
        $fh = fopen($path.$filename, 'r');
        $lines = array();
        while( ($row = fgetcsv($fh, 0, ';')) !== FALSE ) {
            //remove first row
            if($i != 0){
                $onr = $row[0];
                $em = $this->matrikel_model->findIdByOnr($onr);
                if($em != false){
                    //Dessa ska uppdateras
                    $row['id'] = $em;
                    $update[] = $row;
                }else{
                    //create new member
                    $new[] = $row;
                }

            }
            $i++;
        }

        $this->session->set_flashdata('updateMembers', $update);
        $this->session->set_flashdata('newMembers', $new);
        $data['updateMembers'] = $update;
        $data['newMembers'] = $new;

        $this->twig->display('admin/matrikel/matrikelcheck2', $data);
    }

    public function matrikelCheck3(){
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'C');
        $this->load->model('matrikel_model');
        $update = $data['updateMembers'] = $this->session->flashdata('updateMembers');
        $new = $data['newMembers'] = $this->session->flashdata('newMembers');
        $update_amount = 0;
        $new_amount = 0;

        foreach($update as $row){
            $member = new entities\Member($row['id'],$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19],$row[20],$row[21],$row[22], $row[23], $row[24]);
            $this->matrikel_model->save($member);
            $update_amount++;
        }
        foreach($new as $row){
            $member = new entities\Member('',$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10],$row[11],$row[12],$row[13],$row[14],$row[15],$row[16],$row[17],$row[18],$row[19],$row[20],$row[21],$row[22], $row[23], $row[24]);
            $this->matrikel_model->save($member);
            $new_amount++;
        }

        $data['new_amount'] = $new_amount;
        $data['update_amount'] = $update_amount;

        $this->twig->display('admin/matrikel/matrikelcheck3', $data);
    }

    public function truncate(){
        $this->acl->accessRedirect($this->activeUser, 'matrikel', 'D');
        $this->load->model('matrikel_model');
        $this->matrikel_model->truncate();
        redirect(site_url('administrator/matrikel'), 'refresh');
    }
}