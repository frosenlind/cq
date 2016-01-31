<?php

/**
 * Created by PhpStorm.
 * User: Fredrik
 * Date: 2016-01-16
 * Time: 21:52
 */
class My_auth
{


    public function isGuest(){
        //ladda resurser
        $CI =& get_instance();

        if(is_null($CI->session->loggedIn)){
            $newdata = array(
                'loggedIn'  => 'guest'
            );

            $CI->session->set_userdata($newdata);
            return true;
        }
    }

    public function login($email, $password){

        //ladda resurser
        $CI =& get_instance();

        $query = $CI->db->get_where('users', array('email' => $email));
        if ($query->num_rows() == 1){

            //get row for user
            $user = $query->row();

            if(password_verify($password, $user->password)){

                $newdata = array(
                    'loggedIn' => 'user',
                    'id' => $user->id,
                    'username' => $user->username
                );
                $CI->session->set_userdata($newdata);
                return true;
            }else{
                log_message('info', 'LOGIN: Wrong password for: '.$email);
                return false;
            }
        }
        else{
            log_message('info', 'LOGIN: Someone tried to logg in with email: '.$email);
            return false;
        }
    }

    public function logout(){
        $CI =& get_instance();
        $CI->session->sess_destroy();
        $this->isGuest();
        return;
    }

    public function isAuthorized($controller = NULL, $function = NULL, $redirect = FALSE){
        //ladda resurser
        $CI =& get_instance();

        if($CI->session->userdata('loggedIn') !== 'user'){
            if($redirect !== false){
                log_message('info', '401: Someone was not authorized');
                show_error('Du har inte behörighet att se denna sida.',401);
                //redirect(site_url($redirect), 'refresh:');
            }else{
                return false;
            }
        }
    }

    public function createPasswordHash($password){
        return password_hash($password, PASSWORD_DEFAULT);
    }

}