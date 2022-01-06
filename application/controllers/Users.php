<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
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

	public function insert_users(){
        $data = array(
            'user_name' => $this->input->post('user_name'),  
            'user_email' => $this->input->post('user_email'),  
            'user_password' => $this->input->post('user_password'),  
            'user_role_id' => $this->input->post('user_role_id'),  
            'designation_id' => $this->input->post('designation_id'),  
            'user_status' => $this->input->post('user_status')
        );
        $this->load->model('user_model');  
        $query = $this->user_model->insert('user',$data);
        redirect("pages/task_list");
		//echo "task has been inserted";
    }
	function edit_user($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        $result=$query->result();
        
        $data = array (
            'user_id' => $result[0]->user_id,
            'user_name' => $result[0]->user_name,
            'user_email' => $result[0]->user_email,
            'user_password' => $result[0]->user_password
        );
        $this->load->view('inc/header');
        $this->load->view('edit_user',$data);
        $this->load->view('inc/footer');
        
    }

    function update_user(){
        if(!empty($_POST)){
            $data = array(    
                'user_name' => $this->input->post('user_name'),  
                'user_email' => $this->input->post('user_email'),  
                'user_password' => $this->input->post('user_password')  
                ); 
        }
        $id = $this->input->post('user_id');
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);
        redirect();
        echo "data has been updated";
        
    }

	function delete_user(){
		$this->db->where('user_id', $id);
		$this->db->delete('user');
		redirect();
		echo 'task has been deleted';

	}
}