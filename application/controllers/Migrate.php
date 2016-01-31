<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-15
 * Time: 23:18
 */

class Migrate extends CI_Controller
{

    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
    }

}