<?php

/**
 * Description of About_Model
 *
 * @author fflachet
 */
class About_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function add() {
        
    }

    public function get() {
        
    }

    public function getAll() {
        $sql = "SELECT * FROM about";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function update() {
        
    }

    public function delete() {
        
    }

}
