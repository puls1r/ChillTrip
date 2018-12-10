<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Bandung extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "bandung";
		$this->load->view('v_bandung',$data);
	}
	
 
}