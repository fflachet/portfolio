<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class Knowledge_Controller extends CI_Controller{
    
    public function findAllKnowledges() {
        $this->load->model('Knowledge_Model');
        $knowledges = $this->Knowledge_Model->getAll();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($knowledges));
    }
}
