<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-21
 * Time: 16:19
 */

class Matrikel_model extends CI_Model{

    public function findIdByOnr($onr){
        $query = $this->db->select('id, onr')->from('matrikel')
                ->where('onr', $onr)
                ->get();
        if($query->num_rows() == 1){
            return $query->row()->id;
        }else{
            return false;
        }
    }

    public function findFullNameByOnr($onr){
        $query = $this->db->select('fornamn, efternamn, onr')->from('matrikel')
            ->where('onr', $onr)
            ->get();
        if($query->num_rows() == 1){
            $fullname = $query->row()->fornamn.' '.$query->row()->efternamn;
            return $fullname;
        }else{
            return false;
        }
    }

    public function get($onr){

        $query = $this->db->where('onr', $onr)->get('matrikel');
        if ($query->num_rows() != 1) { return false;}

        //CI gives us an array of objects
        $member = $query->row();

        //lets make them member objects
            $objMember = new entities\Member($member->id, $member->onr, $member->lnr, $member->efternamn,
                $member->fornamn, $member->fodelse, $member->fodelse_manad, $member->tel_1, $member->tel_2,
                $member->tel_3, $member->postadress, $member->postnummer, $member->ort, $member->grad,
                $member->intagen, $member->loge, $member->avliden, $member->urtrade, $member->atertrade,
                $member->urtrade2, $member->atertrade2, $member->fadder1, $member->fadder2,
                $member->epost, $member->passiv, $member->hemsida);

        return $objMember;
    }

    public function findAll($limit = NULL){
        $members = array();
        $i = 0;

        if($limit !== NULL){$this->db->limit($limit);}

        $query = $this->db->get('matrikel');
        if ($query->num_rows() < 1) { return $members;}

        //CI gives us an array of objects
        $arrMembers = $query->result();

        //lets make them member objects
        foreach($arrMembers as $member){
            $members[$i] = new entities\Member($member->id, $member->onr, $member->lnr, $member->efternamn,
                $member->fornamn, $member->fodelse, $member->fodelse_manad, $member->tel_1, $member->tel_2,
                $member->tel_3, $member->postadress, $member->postnummer, $member->ort, $member->grad,
                $member->intagen, $member->loge, $member->avliden, $member->urtrade, $member->atertrade,
                $member->urtrade2, $member->atertrade2, $member->fadder1, $member->fadder2,
                $member->epost, $member->passiv, $member->hemsida);
            $i++;
        }
        return $members;
    }

    public function save($member){

        $this->db->set('onr', $member->getOnr());
        $this->db->set('lnr', $member->getLnr());
        $this->db->set('efternamn', $member->getEfternamn());
        $this->db->set('fornamn', $member->getFornamn());
        $this->db->set('fodelse', $member->getFodelse());
        $this->db->set('fodelse_manad', $member->getFodelsem());
        $this->db->set('tel_1', $member->getTel1());
        $this->db->set('tel_2', $member->getTel2());
        $this->db->set('tel_3', $member->getTel3());
        $this->db->set('postadress', $member->getPostadress());
        $this->db->set('postnummer', $member->getPostnummer());
        $this->db->set('ort', $member->getOrt());
        $this->db->set('grad', $member->getGrad());
        $this->db->set('intagen', $member->getIntagen());
        $this->db->set('loge', $member->getLoge());
        $this->db->set('avliden', $member->getAvliden());
        $this->db->set('urtrade', $member->getUrtrade());
        $this->db->set('atertrade', $member->getAtertrade());
        $this->db->set('urtrade2', $member->getUrtrade2());
        $this->db->set('atertrade2', $member->getAtertrade2());
        $this->db->set('fadder1', $member->getFadder1());
        $this->db->set('fadder2', $member->getFadder2());
        $this->db->set('epost', $member->getEpost());
        $this->db->set('passiv', $member->getPassiv());
        $this->db->set('hemsida', $member->getHemsida());

        if($member->getId() == NULL){
            $this->db->insert('matrikel');
            log_message('info', 'Matrikel_model::save - You created the new member'. $member->getOnr());
        }else {
            $this->db->where('id', $member->getId());
            $this->db->update('matrikel');
            log_message('info', 'Matrikel_model::save - You updated the member'. $member->getOnr());
        }
    }

    public function truncate(){
        $this->db->truncate('matrikel');
    }


}