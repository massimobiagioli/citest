<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/API_Controller.php';

class Soggetto extends API_Controller {    
    
    public function read($id) {
        echo "read - id=$id";        
    }
    
    public function query($filters) {
        echo "query - filters=$filters";     
    }
    
    public function insert() {
        $data = print_r($_POST, true);
        echo "insert - data=" . $data ;     
    }
    
    public function update($id) {
        parse_str(file_get_contents("php://input"), $input);
        $data = print_r($input, true);
        echo "update - id=$id  data=$data" ; 
    }
    
    public function delete($id) {        
        echo "delete - id=$id" ;     
    }
    
}