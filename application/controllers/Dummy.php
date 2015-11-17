<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dummy extends CI_Controller {
	
    public function test()
    {
        echo "Dummy Test Route";
    }
    
    public function primeui() {
        $this->load->helper('url');
        $this->load->view('primeui');
    }
    
}