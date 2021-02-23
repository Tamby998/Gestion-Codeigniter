<?php
class Model_client extends CI_Model{

	function client_list(){
		$hasil=$this->db->get('client');
		return $hasil->result();
	}
	function save_client(){
		$data = array(
				'CODE_CLIENT' 	=> $this->input->post('CODE_CLIENT'), 
				'NOM_CLIENT' 	=> $this->input->post('NOM_CLIENT'), 
				'NUM_TELEPHONE'     => $this->input->post('NUM_TELEPHONE'),
				'ADRESSE_CLIENT' 	   => $this->input->post('ADRESSE_CLIENT'), 
				'E_MAIL'   => $this->input->post('E_MAIL'), 
			);
		$result=$this->db->insert('client',$data);
		return $result;
	}

	function update_client(){
		$CODE_CLIENT=$this->input->post('CODE_CLIENT');
		$NOM_CLIENT=$this->input->post('NOM_CLIENT');
		$NUM_TELEPHONE=$this->input->post('NUM_TELEPHONE');
		$ADRESSE_CLIENT=$this->input->post('ADRESSE_CLIENT');
		$E_MAIL=$this->input->post('E_MAIL');
		
        $this->db->where('CODE_CLIENT', $CODE_CLIENT);
		$this->db->set('NOM_CLIENT', $NOM_CLIENT);
		$this->db->set('NUM_TELEPHONE', $NUM_TELEPHONE);
		$this->db->set('ADRESSE_CLIENT', $ADRESSE_CLIENT);
		$this->db->set('E_MAIL', $E_MAIL);
		$result=$this->db->update('client');

		return $result;
	}

	function delete_client(){
		$CODE_CLIENT=$this->input->post('CODE_CLIENT');
		$this->db->where('CODE_CLIENT', $CODE_CLIENT);
		$result=$this->db->delete('client');
		return $result;
	}
		
	function clienty($CODE_CLIENT){
		return $this->db->select('*')
						->from('client')
						->where('CODE_CLIENT',$CODE_CLIENT)
						->get()
						->result_array();
	}
	
	
}