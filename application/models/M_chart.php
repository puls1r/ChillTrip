<?php 
	class M_chart extends CI_Model{
		
		public function getData($id){
			$this->db->select('*')->from('destinasi')->where('id_destinasi', $id);
			return $this->db->get()->result();
		}
		
		public function getUser($id){
			$this->db->select('*')->from('user')->where('id_user', $id);
			return $this->db->get()->result();
		}
	}
?>