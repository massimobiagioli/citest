<?php

class Sogg_model extends CI_Model {
    
    public function read($offset) {
        $query = $this->db->get('bta_sogg', 10, $offset);
        return $query->result();
    }
        
}
