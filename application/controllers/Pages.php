<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
		if ($this->session->userdata('logged_in') == TRUE){

		}
		else{
			redirect('login');
		}
        
    }

	public function index(){
		$this->load->view('login');
	}

	function task_list(){
        $this->load->view('index');
    }

    function add_task(){
        $this->load->view('add_task');
    }

	function add_user(){
        $this->load->view('add_user');
    }
}
