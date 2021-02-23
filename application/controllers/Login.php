<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('admin');
    }

	public function index()
	{
		
			if($this->admin->logged_id())
			{
				
				redirect("homeControlleur");

			}else{

	            $this->form_validation->set_rules('username', 'Nom d\'utlilisateur', 'required');
	            $this->form_validation->set_rules('password', 'Mot de passe', 'required');

	            
	            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
	                <div class="header"><b><i class="glyphicon glyphicon-warning-sign"></i> Le {field}</b> ne peut pas être vide</div></div>');

	          
				if ($this->form_validation->run() == TRUE) {

				
	            $username = $this->input->post("username", TRUE);
	            $password = MD5($this->input->post('password', TRUE));
	            
	            
	            $checking = $this->admin->check_login('login', array('username' => $username), array('Password' => $password));
	            
	            
	            if ($checking != FALSE) {
	                foreach ($checking as $apps) {

	                    $session_data = array(
	                        'Id'   => $apps->Id,
	                        'username' => $apps->username,
	                        'Password' => $apps->password,
	                        'Email' => $apps->email
	                    );
	                    //set session userdata
	                    $this->session->set_userdata($session_data);

	                    redirect('homeControlleur/');

	                }
	            }else{

	            	$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
	                	<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERREUR </b> Nom d \'utilisateur ou mot de passe incorrect !</div></div>';
	            	$this->load->view('login', $data);
	            }

	        }else{

	            $this->load->view('login');
	        }

		}

	}
}
