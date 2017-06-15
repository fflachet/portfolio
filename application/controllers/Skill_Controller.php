<?php

/**
 * Description of About_Controller
 *
 * @author fflachet
 */
class Skill_Controller extends CI_Controller{
    
    public function findAllSkills() {
        $this->load->model('Skill_Model');
        $skills = $this->Skill_Model->getAll();
        
        $this->output->set_content_type('application/json');
        $this->output->set_output(json_encode($skills));
    }
}
