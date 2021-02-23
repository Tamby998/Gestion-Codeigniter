<?php
defined('BASEPATH') OR exit('Nio direct script access allowed');
	class materielsControlleur extends CI_Controller
	{
		 function __construct()
		{
			parent::__construct();
			$this->load->model('Model_materiels', 'mod_materiels', TRUE);
			$this->load->model('admin');
		}

		 function index()
		{
		$data['type_materiels'] = $this->mod_materiels->get_type_materiels_query();
		$data['client'] = $this->mod_materiels->get_client_query();
		$this->load->view('materiels', $data);
		}
		function save(){
		$save=$this->Model_materiels->save_materiels();
		echo json_encode($save);
	}


    }