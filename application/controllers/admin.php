<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller {
	
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		// Fungsi Login
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
             $this->simple_login->admin_login($username,$password, base_url('v_admin_home'), base_url('v_admin'));
         }
         // End fungsi login
         $this->load->view('v_admin');
     }
 
     public function logout(){
         $this->simple_login->logout_admin();
     }
        
 }