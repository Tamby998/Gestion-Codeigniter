<?php
class materiels extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('materiels_model');
	}
	function index(){
		$this->load->view('materiels_view');
	}

	function materiels_data(){
		$data=$this->materiels_model->materiels_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->materiels_model->save_materiels();
		echo json_encode($data);
	}
}