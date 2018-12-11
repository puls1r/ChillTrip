<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller {
	
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
             $this->simple_login->login($username,$password, base_url('v_home'), base_url('v_login'));
         }
         // End fungsi login
         $this->load->view('v_login');
     }
 
     public function logout(){
         $this->simple_login->logout();
     }
     public function cekin(){
         $this->simple_login->telah();
     }        
 }