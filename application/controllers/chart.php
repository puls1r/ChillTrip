<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->simple_login->maap();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['judul'] = "chart";
		$this->load->view('v_chart',$data);
	}
	
 
}