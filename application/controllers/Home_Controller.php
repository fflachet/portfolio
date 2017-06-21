<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('About_Model', 'aboutM');
        $this->load->model('Skill_Model', 'skillM');
        $this->load->model('Project_Model', 'projectM');
    }

    public function index() {
        $data['about'] = $this->aboutM->getAll();
        $data['skills'] = $this->skillM->getAll();
        $data['projects'] = $this->projectM->getAll();
        $data['projectSkills'] = $this->projectM->getProjectsFromSkills();
        $data['projectKnows'] = $this->projectM->getProjectsFromKnows();
        $this->load->view('home', $data);
    }

}
