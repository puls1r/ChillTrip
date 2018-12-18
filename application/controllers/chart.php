<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Chart extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->simple_login->cek_login();
		$this->simple_login->maap();
		$this->load->helper('url');
		$this->load->model('M_chart');
	}
 
	public function index(){
		$data['id_dest'] = "-";
		$data['deskripsi'] = "-";
		$data['harga'] = "-";
		$data['tempat'] = "-";
		$data['tanggal'] = "-";
		$data['username'] = "-";
		$data['id_user'] = "-";
		$data['name'] = "-";
		$data['email'] = "-";
		$this->load->view('v_chart', $data);
	}
	
	public function getView($id){
		$dataDest = $this->M_chart->getData($id);
		foreach($dataDest as $row){
			$data['id_dest'] = $row->id_destinasi;
			$data['deskripsi'] = $row->deskripsi;
			$data['harga'] = $row->harga;
			$data['tempat'] = $row->tempat;
			$data['tanggal'] = $row->tanggal;
		}
		$idUser = $this->session->id;
		$dataUser = $this->M_chart->getUser($idUser);
		foreach($dataUser as $row){
			$data['username'] = $row->username;
			$data['id_user'] = $row->id_user;
			$data['name'] = $row->name;
			$data['email'] = $row->email;
		}
		$this->load->view('v_chart', $data);
	}
	
 
}