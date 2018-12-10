<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "Halaman depan";
		$this->load->view('v_home',$data);
	}
	
 
}