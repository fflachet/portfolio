<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class About_Controller extends CI_Controller{
    
    public function findAllAbout() {
        $this->load->model('About_Model');
        $abouts = $this->About_Model->getAll();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($abouts));
    }
}
