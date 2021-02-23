<?php
class clientControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_client');
		$this->load->model('admin');
	}

	function index(){
		if($this->admin->logged_id())
		{

			$this->load->view('client');		

		}else{

			redirect("login");

		}		
	}

	function clientMaj(){
		$this->load->view('clientMaj');
	}

	function listClient(){
		$this->load->view('clientliste');
	}

	function client_data(){
		$data=$this->Model_client->client_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Model_client->save_client();
		echo json_encode($data);
	}

	function update(){
		$data=$this->Model_client->update_client();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->Model_client->delete_client();
		echo json_encode($data);
	}
}