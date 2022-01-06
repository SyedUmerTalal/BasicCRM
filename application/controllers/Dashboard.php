<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();   
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->model('task_model');  
		if ($this->session->userdata('logged_in') == TRUE){

		}
		else{
			redirect('login');
		}
        
    }
    
	function index(){
        $this->load->view('inc/header');
        $this->load->view('index');
        $this->load->view('inc/footer');
    }
    
    
    	function manage_users(){
        $this->load->view('inc/header');
        $this->load->view('user_list');
        $this->load->view('inc/footer');
    }
    
    
        function create_task(){
//         $content  = array(
// 			'users' => $this->task_model->get_users(),
// 		);
		$data['users'] = $this->task_model->get_users();
		//echo'<pre>';print_r($data);exit;
        $this->load->view('inc/header');
        $this->load->view('create_task',$data);
        $this->load->view('inc/footer');
    }
    
    
        function create_user(){
        $this->load->view('inc/header');
        $this->load->view('add_user');
        $this->load->view('inc/footer');
    }
    
    

	public function add_user(){
        

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
        //echo'<pre>';print_r($data);die;
        if($query){
            
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong.');
                        		redirect("manage-users");
        }else{
            
                                $this->session->set_flashdata('msg','1');
                                $this->session->set_flashdata('alert_data', 'Added Successfull');
                        		redirect("manage-users");
        }
        //redirect("manage-users");
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
            'user_password' => $result[0]->user_password,
            'user_role_id' => $result[0]->user_role_id,
            'designation_id' => $result[0]->designation_id,
            'user_status' => $result[0]->user_status
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
                'user_password' => $this->input->post('user_password'),  
                'user_role_id' => $this->input->post('user_role_id'),
                'designation_id' => $this->input->post('designation_id'),
                'user_status' => $this->input->post('user_status')
                ); 
        }
        $id = $this->input->post('user_id');
       
        $this->db->where('user_id', $id);
        $res = $this->db->update('user', $data);
        if($res){
            
            
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Updated Successfull');
                        		redirect('manage-users');
        }else{
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong');
                        		redirect('manage-users');
        }
        redirect();
        echo "data has been updated";
        
    }

	function delete_user(){
	    $id = $this->uri->segment(2);
		$this->db->where('user_id', $id);
		$res = $this->db->delete('user');
		if($res){
            
            
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Deleted Successfull.');
                        		redirect('manage-users');
        }else{
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong');
                        		redirect('manage-users');
        }
		redirect();
		//echo 'task has been deleted';

	}
	function view_user(){
        
		
		$id = $this->uri->segment(2);
		
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_id', $id); 
        $query = $this->db->get();
        $result=$query->result();
        $data = array (
            'user_id' => $result[0]->user_id,
            'user_name' => $result[0]->user_name,
            'user_email' => $result[0]->user_email,
            'user_password' => $result[0]->user_password,
            'user_role_id' => $result[0]->user_role_id,
            'designation_id' => $result[0]->designation_id,
            'user_status' => $result[0]->user_status,
        );
        
        $this->load->view('inc/header');
        $this->load->view('view_user',$data);
        $this->load->view('inc/footer');
    }
    
    

    public function get_user_task($user_id){
		$this->db->select('*');
		$this->db->where('assignedTo',$user_id);
		$this->db->from('task');
		$query = $this->db->get();
		$records = $query->result();
		if(!empty($records)){
			return $records;
		}
		else{
			return false;
			}
		}

    function view_task(){
        
		
		$id = $this->uri->segment(2);
		
        $this->db->select('*');
        $this->db->from('task');
        $this->db->where('task_id', $id); 
        $query = $this->db->get();
        $result=$query->result();
        $data = array (
            'task_id' => $result[0]->task_id,
            'task_name' => $result[0]->task_name,
            'task_description' => $result[0]->task_description,
            'address' => $result[0]->address,
            'task_time'=>$result[0]->task_time,
            'task_date'=>$result[0]->task_date,
            'task_city_name'=>$result[0]->task_city_name,
            'task_custom' => $result[0]->task_custom,
            'task_service'=>$result[0]->task_service,
            'task_status'=>$result[0]->task_status,
        );
        
        $this->load->view('inc/header');
        $this->load->view('view_task',$data);
        $this->load->view('inc/footer');
    }
    
    
    public function ajaxRequestPost()
    {
        
        
        try {
            $id = $this->input->post('id');
            $data = array(    
            'task_status' => $this->input->post('selectedVal'),
            );            
            $this->db->where('task_id',$id);
            $this->db->update('task',$data);
            echo 1;      
        } catch(Exception $e){
            echo 0;
        } 
   }


	public function insert_task(){
	    
        $data = array(
            'task_name' => $this->input->post('task_name'),  
            'task_description' => $this->input->post('task_description'),  
            'address' => $this->input->post('address'),  
            'task_time' => $this->input->post('task_time'),  
            'task_date' => $this->input->post('task_date'),
            'task_city_name' => $this->input->post('task_city_name'),
            'task_custom' => $this->input->post('task_custom'),
            'task_service' => $this->input->post('task_service'),  
            'client_number' => $this->input->post('client_number'),
            'assign_to' => $this->input->post('user_id'),
            'task_status'=>$this->input->post('task_status'),
        );
        //var_dump($data);
        $this->load->model('task_model');  
        $query = $this->task_model->insert('task',$data);
        
        if($query){
            
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong');
                        		redirect();
        }else{
            
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Added Successfull.');
                        		redirect();
        }
        

    }

	function edit_task(){
		$id = $this->uri->segment(2);
        $this->db->select('*');
        $this->db->from('task');
        $this->db->where('task_id', $id);
        $query = $this->db->get();
        $result=$query->result();
        $user['users'] = $this->task_model->get_users();
        
        // echo "<pre>";
        //print_r($user);
        //die;
        
        $data = array (
            'task_id' => $result[0]->task_id,
            'task_name' => $result[0]->task_name,
            'task_description' => $result[0]->task_description,
            'address' => $result[0]->address,
            'client_number'=>$result[0]->client_number,
            'task_service'=>$result[0]->task_service,
            'task_custom'=>$result[0]->task_custom,
            'task_city_name'=>$result[0]->task_city_name,
            'task_date'=>$result[0]->task_date,
            'task_time'=>$result[0]->task_time,
            'task_status'=>$result[0]->task_status,
            //'assign_to'=>$resut[0]->user_id,
        );
        $this->load->view('inc/header');
        $this->load->view('edit_task',$data,$user);
        $this->load->view('inc/footer');
        
    }

    function update_task(){
        if(!empty($_POST)){
            $data = array(    
                'task_name' => $this->input->post('task_name'),  
                'task_description' => $this->input->post('task_description'),  
                'address' => $this->input->post('address'),
                'client_number' => $this->input->post('client_number'),
                'task_service' => $this->input->post('task_service'),
                'task_custom' => $this->input->post('task_custom'),
                'task_city_name' => $this->input->post('task_city_name'),
                'task_date' => $this->input->post('task_date'),
                'task_time' => $this->input->post('task_time'),
                'task_status' => $this->input->post('task_status'),
                ); 
        }
        $id = $this->input->post('task_id');
       
        $this->db->where('task_id', $id);
        $res = $this->db->update('task', $data);
        if($res){
            
            
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Updated Successfull.');
                        		redirect();
        }else{
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong');
                        		redirect();
        }
        redirect();
        echo "data has been updated";
        
    }

	function delete_task(){
		$id = $this->uri->segment(2);
		$this->db->where('task_id', $id);
		$res = $this->db->delete('task');
		if($res){
            
            
                                $this->session->set_flashdata('msg', '1');
                                $this->session->set_flashdata('alert_data', 'Deleted Successfull.');
                        		redirect();
        }else{
            
                                $this->session->set_flashdata('msg', '2');
                                $this->session->set_flashdata('alert_data', 'Something went wrong');
                        		redirect();
        }
		redirect();
		echo 'task has been deleted';

	}
	

	function logout(){
		$this->session->sess_destroy();
		redirect();
	}
	
	
    
}
