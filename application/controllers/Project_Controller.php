<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class Project_Controller extends CI_Controller{
    
    public function findProjectsfromSkills() {
        $this->load->model('Project_Model');
        $projects = $this->Project_Model->getProjectsFromSkills();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($projects));
    }
}
