<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-23
 * Time: 19:16
 */

namespace entities;

class User{

    protected $id;
    protected $username;
    protected $password;
    protected $email;
    protected $onr;
    protected $created;

    /**
     * User constructor.
     */
    public function __construct($arrParameters)
    {
        $this->id = 0;
        $this->created = 0;
        if(isset($arrParameters->id)){$this->id = $arrParameters->id;}
        $this->username = $arrParameters->username;
        $this->password = $arrParameters->password;
        $this->email = $arrParameters->email;
        $this->onr = $arrParameters->onr;
        if(isset($arrParameters->created)){$this->created = $arrParameters->created;}
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getCreated()
    {
        return $this->created;
    }







}