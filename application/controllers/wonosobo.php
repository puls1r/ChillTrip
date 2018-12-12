<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Wonosobo extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "wonosobo";
		$this->load->view('v_wonosobo',$data);
	}
	
 
}