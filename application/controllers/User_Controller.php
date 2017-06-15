<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class User_Controller extends CI_Controller{
    
    public function findAllUsers() {
        $this->load->model('User_Model');
        $users = $this->User_Model->getAll();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($users));
    }
}
