<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();   
        $this->load->library('session');
		$this->load->helper('url');   
		
		
			if ($this->session->userdata('logged_in') == TRUE){
    			redirect('dashboard');
    		}
    		
    		
    }

	public function index(){
		$this->load->view('login');
	}
	
	
	function verify_user(){
		$this->load->library('form_validation');
		
		if(!empty($_POST)){
			
			$this->form_validation->set_rules('user_email', 'email', 'required');
			$this->form_validation->set_rules('user_password', 'Password', 'required');
				if ($this->form_validation->run() == FALSE){
					if (isset($this->session->userdata['logged_in'])) {
				
					} 
					else {
						$this->load->view('login');
					}
				}
                else{
					$data = array(  
						'user_email' => $this->input->post('user_email'),  
						'user_password' => $this->input->post('user_password')  
						); 
					
					$this->load->model('login_model');  
					$query = $this->login_model->log_in_correctly($data);

					if ($this->login_model->log_in_correctly($data))  {
						$user_email = $this->input->post('user_email');
						$result   = $this->login_model->read_user_information($user_email);
						if ($result != false) {
							$session_data = array(
								'user_id' => $result[0]->user_id,
								'user_email' => $result[0]->user_email,	
								'user_role_id' => $result[0]->user_role_id	
							);
    							$this->session->set_userdata('logged_in', $session_data);
                                $this->session->set_userdata($session_data);
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Login Successfull.');
                                redirect('dashboard');
						}
						else{
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Invalid Email Or Password.');
                                redirect('login');
						} 	  
					} 
					else {  
					    
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Invalid Email Or Password.');
                                redirect('login');
					}  

				}
		}
		else {
			$this->load->view('login');
		}
	}

}
