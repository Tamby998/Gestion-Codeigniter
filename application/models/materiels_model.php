<?php
class materiels_model extends CI_Model{

	function materiels_list(){
		$hasil=$this->db->get('type_materiels');
		return $hasil->result();
	}

	function save_materiels(){
		$data = array(
				'ID_TYPE' 	=> $this->input->post('ID_TYPE'), 
				'TYPE_MATERIELS' 	=> $this->input->post('TYPE_MATERIELS'), 
			);
		$result=$this->db->insert('type_materiels',$data);
		return $result;
	}	
}