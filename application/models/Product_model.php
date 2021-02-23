<?php
class Product_model extends CI_Model{

	function product_list(){
		$hasil=$this->db->get('type_intervention');
		return $hasil->result();
	}

	function save_product(){
		$data = array(
				'CODE_INTERVENTION' 	=> $this->input->post('CODE_INTERVENTION'), 
				'DESIGNATION' 	=> $this->input->post('DESIGNATION'), 
				'PRIX_COUT' => $this->input->post('PRIX_COUT'), 
			);
		$result=$this->db->insert('type_intervention',$data);
		return $result;
	}	
}