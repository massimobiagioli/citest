<?php

class Sogg_model extends CI_Model {
    
    public function read() {
        $query = $this->db->get('bta_sogg', 10);
        return $query->result();
    }
        
}
