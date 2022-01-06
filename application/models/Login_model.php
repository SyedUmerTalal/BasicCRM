<?php  
  
class Login_model extends CI_Model {  

    public function log_in_correctly($data) {  
        $this->db->where('user_email', $this->input->post('user_email'));  
        $this->db->where('user_password', $this->input->post('user_password'));  
        $query = $this->db->get('user');  
  
        if ($query->num_rows() == 1)  {  
            return true;  
        } 
        else {  
            return false;  
        }  
    }
    
    function read_user_information($user_email) {  
        $this->db->where('user_email', $this->input->post('user_email'));    
        $query = $this->db->get('user');  
  
        if ($query->num_rows() == 1)  {  
            return $query->result();
        } 
        else {  
            return false;  
        }  
    }
}  
?>