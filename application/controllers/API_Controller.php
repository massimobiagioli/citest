<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class API_Controller extends CI_Controller {    
    
    public function __construct() {        
        parent::__construct();     
        $this->authenticateCORS();
    }
    
    public function load($id) {
        
    }
    
    public function query($filters) {        
        
    }
    
    public function insert() {
        
    }
    
    public function update($id) {
        
    }
    
    public function delete($id) {
        
    }
    
    protected function authenticateCORS() {        
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
    }
    
}