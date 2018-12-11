<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Trip extends CI_Controller {
	
    function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->load->helper('url');
		
	}
    public function index(){		
		$data['judul'] = "Halaman trip";
		$this->load->view('v_trip',$data);
	}
	
 
}