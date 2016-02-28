<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-02-21
 * Time: 16:57
 */

namespace entities;


class Member
{
    protected $id;
    protected $onr;
    protected $lnr;
    protected $efternamn;
    protected $fornamn;
    protected $fodelse;
    protected $fodelsem;
    protected $tel_1;
    protected $tel_2;
    protected $tel_3;
    protected $postadress;
    protected $postnummer;
    protected $ort;
    protected $grad;
    protected $intagen;
    protected $loge;
    protected $avliden;
    protected $urtrade;
    protected $atertrade;
    protected $urtrade2;
    protected $atertrade2;
    protected $fadder1;
    protected $fadder2;
    protected $epost;
    protected $passiv;
    protected $hemsida;

    /**
     * Member constructor.
     * @param $id
     * @param $onr
     * @param $lnr
     * @param $efternamn
     * @param $fornamn
     * @param $fodelse
     * @param $fodelse_manad
     * @param $tel_1
     * @param $tel_2
     * @param $tel_3
     * @param $postadress
     * @param $postnummer
     * @param $ort
     * @param $grad
     * @param $intagen
     * @param $loge
     * @param $avliden
     * @param $urtrade
     * @param $atertrade
     * @param $urtrade2
     * @param $atertrade2
     * @param $fadder1
     * @param $fadder2
     * @param $epost
     * @param $passiv
     * @param $hemsida
     */
    public function __construct($id=NULL, $onr, $lnr, $efternamn, $fornamn, $fodelse, $fodelsem, $tel_1, $tel_2, $tel_3, $postadress, $postnummer, $ort, $grad, $intagen, $loge, $avliden, $urtrade, $atertrade, $urtrade2, $atertrade2, $fadder1, $fadder2, $epost, $passiv, $hemsida)
    {
        $this->id = $id;
        $this->onr = $onr;
        $this->lnr = $lnr;
        $this->efternamn = $efternamn;
        $this->fornamn = $fornamn;
        $this->fodelse = $fodelse;
        $this->fodelsem = $fodelsem;
        $this->tel_1 = $tel_1;
        $this->tel_2 = $tel_2;
        $this->tel_3 = $tel_3;
        $this->postadress = $postadress;
        $this->postnummer = $postnummer;
        $this->ort = $ort;
        $this->grad = $grad;
        $this->intagen = $intagen;
        $this->loge = $loge;
        $this->avliden = $avliden;
        $this->urtrade = $urtrade;
        $this->atertrade = $atertrade;
        $this->urtrade2 = $urtrade2;
        $this->atertrade2 = $atertrade2;
        $this->fadder1 = $fadder1;
        $this->fadder2 = $fadder2;
        $this->epost = $epost;
        $this->passiv = $passiv;
        $this->hemsida = $hemsida;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getOnr()
    {
        return $this->onr;
    }

    /**
     * @param mixed $onr
     */
    public function setOnr($onr)
    {
        $this->onr = $onr;
    }

    /**
     * @return mixed
     */
    public function getLnr()
    {
        return $this->lnr;
    }

    /**
     * @param mixed $lnr
     */
    public function setLnr($lnr)
    {
        $this->lnr = $lnr;
    }

    /**
     * @return mixed
     */
    public function getEfternamn()
    {
        return $this->efternamn;
    }

    /**
     * @param mixed $efternamn
     */
    public function setEfternamn($efternamn)
    {
        $this->efternamn = $efternamn;
    }

    /**
     * @return mixed
     */
    public function getFornamn()
    {
        return $this->fornamn;
    }

    /**
     * @param mixed $fornamn
     */
    public function setFornamn($fornamn)
    {
        $this->fornamn = $fornamn;
    }

    /**
     * @return mixed
     */
    public function getFodelse()
    {
        return $this->fodelse;
    }

    /**
     * @param mixed $fodelse
     */
    public function setFodelse($fodelse)
    {
        $this->fodelse = $fodelse;
    }

    /**
     * @return mixed
     */
    public function getFodelsem()
    {
        return $this->fodelsem;
    }

    /**
     * @param mixed $fodelse_manad
     */
    public function setFodelsem($fodelsem)
    {
        $this->fodelsem = $fodelsem;
    }

    /**
     * @return mixed
     */
    public function getTel1()
    {
        return $this->tel_1;
    }

    /**
     * @param mixed $tel_1
     */
    public function setTel1($tel_1)
    {
        $this->tel_1 = $tel_1;
    }

    /**
     * @return mixed
     */
    public function getTel2()
    {
        return $this->tel_2;
    }

    /**
     * @param mixed $tel_2
     */
    public function setTel2($tel_2)
    {
        $this->tel_2 = $tel_2;
    }

    /**
     * @return mixed
     */
    public function getTel3()
    {
        return $this->tel_3;
    }

    /**
     * @param mixed $tel_3
     */
    public function setTel3($tel_3)
    {
        $this->tel_3 = $tel_3;
    }

    /**
     * @return mixed
     */
    public function getPostadress()
    {
        return $this->postadress;
    }

    /**
     * @param mixed $postadress
     */
    public function setPostadress($postadress)
    {
        $this->postadress = $postadress;
    }

    /**
     * @return mixed
     */
    public function getPostnummer()
    {
        return $this->postnummer;
    }

    /**
     * @param mixed $postnummer
     */
    public function setPostnummer($postnummer)
    {
        $this->postnummer = $postnummer;
    }

    /**
     * @return mixed
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param mixed $ort
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;
    }

    /**
     * @return mixed
     */
    public function getGrad()
    {
        return $this->grad;
    }

    /**
     * @param mixed $grad
     */
    public function setGrad($grad)
    {
        $this->grad = $grad;
    }

    /**
     * @return mixed
     */
    public function getIntagen()
    {
        return $this->intagen;
    }

    /**
     * @param mixed $intagen
     */
    public function setIntagen($intagen)
    {
        $this->intagen = $intagen;
    }

    /**
     * @return mixed
     */
    public function getLoge()
    {
        return $this->loge;
    }

    /**
     * @param mixed $loge
     */
    public function setLoge($loge)
    {
        $this->loge = $loge;
    }

    /**
     * @return mixed
     */
    public function getAvliden()
    {
        return $this->avliden;
    }

    /**
     * @param mixed $avliden
     */
    public function setAvliden($avliden)
    {
        $this->avliden = $avliden;
    }

    /**
     * @return mixed
     */
    public function getUrtrade()
    {
        return $this->urtrade;
    }

    /**
     * @param mixed $urtrade
     */
    public function setUrtrade($urtrade)
    {
        $this->urtrade = $urtrade;
    }

    /**
     * @return mixed
     */
    public function getAtertrade()
    {
        return $this->atertrade;
    }

    /**
     * @param mixed $atertrade
     */
    public function setAtertrade($atertrade)
    {
        $this->atertrade = $atertrade;
    }

    /**
     * @return mixed
     */
    public function getUrtrade2()
    {
        return $this->urtrade2;
    }

    /**
     * @param mixed $urtrade2
     */
    public function setUrtrade2($urtrade2)
    {
        $this->urtrade2 = $urtrade2;
    }

    /**
     * @return mixed
     */
    public function getAtertrade2()
    {
        return $this->atertrade2;
    }

    /**
     * @param mixed $atertrade2
     */
    public function setAtertrade2($atertrade2)
    {
        $this->atertrade2 = $atertrade2;
    }

    /**
     * @return mixed
     */
    public function getFadder1()
    {
        return $this->fadder1;
    }

    /**
     * @param mixed $fadder1
     */
    public function setFadder1($fadder1)
    {
        $this->fadder1 = $fadder1;
    }

    /**
     * @return mixed
     */
    public function getFadder2()
    {
        return $this->fadder2;
    }

    /**
     * @param mixed $fadder2
     */
    public function setFadder2($fadder2)
    {
        $this->fadder2 = $fadder2;
    }

    /**
     * @return mixed
     */
    public function getEpost()
    {
        return $this->epost;
    }

    /**
     * @param mixed $epost
     */
    public function setEpost($epost)
    {
        $this->epost = $epost;
    }

    /**
     * @return mixed
     */
    public function getPassiv()
    {
        return $this->passiv;
    }

    /**
     * @param mixed $passiv
     */
    public function setPassiv($passiv)
    {
        $this->passiv = $passiv;
    }

    /**
     * @return mixed
     */
    public function getHemsida()
    {
        return $this->hemsida;
    }

    /**
     * @param mixed $hemsida
     */
    public function setHemsida($hemsida)
    {
        $this->hemsida = $hemsida;
    }




}