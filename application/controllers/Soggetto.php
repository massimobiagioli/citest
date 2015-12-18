<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'controllers/API_Controller.php';

class Soggetto extends API_Controller {    
    
    public function load($id) {
        parent::load($id);
        echo "read - id=$id";        
    }
    
    public function query($filters) {
        parent::query($filters);
        //var_dump($this->input);
        echo "query - filters=$filters";     
    }
    
    public function insert() {
        parent::insert();
        $authKey = $this->input->request_headers()['X-AUTH'];        
        $authKey = $this->input->request_headers()['X-AUTH'];        
        $data = print_r($_POST, true);        
        echo "insert - data=" . $data . "  - AUTH-KEY: " . $authKey;
    }
    
    public function update($id) {
        parent::update($id);
        parse_str(file_get_contents("php://input"), $input);
        $data = print_r($input, true);
        echo "update - id=$id  data=$data" ; 
    }
    
    public function delete($id) {        
        parent::delete($id);
        echo "delete - id=$id" ;     
    }    
    
}