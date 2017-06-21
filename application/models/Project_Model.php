<?php

/**
 * Description of about_Model
 *
 * @author fflachet
 */
class Project_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function add() {
        
    }
    
    public function get() {
        
    }
    
    public function getAll() {
        $sql = "SELECT * FROM project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function getProjectsFromSkills() {
        $sql = "SELECT skill.name AS skillN, project.name as projectN
                FROM skills_has_project
                JOIN skill ON skill.id_skills = skills_has_project.skills_id_skills
                JOIN project ON project.id_project = skills_has_project.project_id_project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function getProjectsFromKnows() {
        $sql = "SELECT knowledge.name AS knowledgeN, project.name as projectN
                FROM knowledge_has_project
                JOIN knowledge ON knowledge.id_knowledge = knowledge_has_project.knowledge_id_knowledge
                JOIN project ON project.id_project = knowledge_has_project.project_id_project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function update() {
        
    }
    
    public function delete() {
        
    }
}
