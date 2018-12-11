<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home2 extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
	}
 
	public function index(){		
		$data['judul'] = "Halaman depan";
		$this->simple_login->cek_login();
		$this->load->view('v_home2',$data);
	}
	
 
}