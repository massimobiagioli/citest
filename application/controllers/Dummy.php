<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller {
	
    public function test()
    {
        echo "Dummy Test Route";
    }
    
    public function primeui() {
        $this->load->model('sogg_model', 'sogg', TRUE);
        $this->load->helper('url');
        $data['results'] = $this->sogg->read();        
        $this->load->view('primeui', $data);
    }
    
}