<?php
class Model_materiels extends CI_Model{
	 function __construct()
	{
		parent::__construct();
	}
	 function get_client_query()
	{
		$tamby = $this->db->get('client');
		return $tamby->result();
	}
	 function get_type_materiels_query()
	{
		$query = $this->db->get('type_materiels');
		return $query->result();
	}
		function save_materiels(){
		$save = array(
				'NUM_MATERIELS' 	=> $this->input->post('NUM_MATERIELS'), 
				'ID_TYPE ' 	=> $this->input->post('ID_TYPE'), 
				'CODE_CLIENT'     => $this->input->post('CODE_CLIENT'), 
				'DATE_ENTREE'   => $this->input->post('DATE_ENTREE'),
				'NUM_SERIE_MATERIELS' 	   => $this->input->post('NUM_SERIE_MATERIELS'),
				'MODELES_MATERIELS' 	   => $this->input->post('MODELES_MATERIELS'),
				'MARQUE_MATERIELS' 	   => $this->input->post('MARQUE_MATERIELS'),  
			);
		$result=$this->db->insert('materiels',$save);
		return $result;
	}

}