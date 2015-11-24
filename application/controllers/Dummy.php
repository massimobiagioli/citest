<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller {
	
    public function test()
    {
        echo "Dummy Test Route";
    }
    
    public function testdata() {
        $this->load->model('sogg_model', 'sogg', TRUE);
        $this->load->helper('url');
        $data['results'] = $this->sogg->read();        
        $this->load->view('testdata', $data);
    }
    
    public function index() {
        $this->load->helper('url');
        $this->load->view('primeui');
    }
    
    public function load($offset) {
        $this->load->model('sogg_model', 'sogg', TRUE);
        $this->load->helper('url');                
        echo json_encode($this->sogg->read($offset));
    }
    
}