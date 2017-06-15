<?php

/**
 * Description of about_Model
 *
 * @author fflachet
 */
class Background_Model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function add() {
        
    }
    
    public function get() {
        
    }
    
    public function getAll() {
        $sql = "SELECT * FROM background";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update() {
        
    }
    
    public function delete() {
        
    }
}
