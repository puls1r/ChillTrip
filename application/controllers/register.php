<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account');
	}
 
	public function index(){		
		$this->form_validation->set_rules('name', 'Name','required');
         $this->form_validation->set_rules('username', 'Username','required');
         $this->form_validation->set_rules('email','Email','required|valid_email');
		 $this->form_validation->set_rules('hp','HP','required');
         $this->form_validation->set_rules('password','Password','required');
         $this->form_validation->set_rules('confirmpassword','Password','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('v_register');
         }
		 else{
 
             $data['name']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
			 $data['hp']   =    $this->input->post('hp');
             $data['password'] =    md5($this->input->post('password'));
 
             $this->m_account->daftar($data);
             
            
             $this->session->set_flashdata('oke','Registrasi berhasil , Silahkan Login');
             $this->load->view('v_login');
                
         }
     }
 }