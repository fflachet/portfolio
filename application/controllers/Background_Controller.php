<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class Background_Controller extends CI_Controller{
    
    public function findAllBackgrounds() {
        $this->load->model('Background_Model');
        $backgrounds = $this->Background_Model->getAll();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($backgrounds));
    }
}
