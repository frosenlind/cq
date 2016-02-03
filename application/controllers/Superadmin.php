<?php
/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-31
 * Time: 16:43
 */

class Superadmin extends MY_Controller{

    public function resources(){
        //load CI Resurces
        $this->load->library('form_validation');
        $this->load->model('resources_model');

        $data['pageHeader'] = 'Resurser';
        $data['resources'] = $this->resources_model->getAll();

        //Set rules
        $this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
        $this->form_validation->set_rules('name', 'Namn', 'required|is_unique[resources.name]');
        $this->form_validation->set_rules('description', 'Beskrivning', 'required');
        $this->form_validation->set_message('required', 'Fältet "%s" är obligatostiskt!');
        $this->form_validation->set_message('is_unique', 'Fältet "%s" måste vara unikt!');

        if ($this->form_validation->run() == FALSE)
        {
            //load validation errors to twig
            $data['validation_errors'] = validation_errors();
            $this->twig->display('admin/resources', $data);
        }
        else
        {

            $arg = new stdClass();
            $arg->name = $this->input->post('name');
            $arg->description = $this->input->post('description');
            $newResource = new entities\Resource($arg);

            $this->resources_model->save($newResource);
            redirect(site_url('superadmin/resources'), 'refresh');
        }

    }
}