<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 17:23
 */

namespace entities;


class Resource
{
    protected $id;
    protected $name;
    protected $description;

    /**
     * Resource constructor.
     */
    public function __construct($arrParameters)
    {
        $this->id = 0;
        if(isset($arrParameters->id)){$this->id = $arrParameters->id;}
        $this->name = $arrParameters->name;
        $this->description = $arrParameters->description;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }





}