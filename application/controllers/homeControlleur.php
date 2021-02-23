<?php
class homeControlleur extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_home');
		  $this->load->model('admin');
	}

	function index(){
		if($this->admin->logged_id())
		{

			$this->load->view('acceuil');		

		}else{

			redirect("login");

		}		
	}

	function acceuil_data(){
		$data=$this->Model_home->acceuil_list();
		echo json_encode($data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}