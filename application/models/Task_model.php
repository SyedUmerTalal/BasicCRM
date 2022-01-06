<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
  
class Task_model extends CI_Model {  

    public function insert($table,$data) {  
        $query = $this->db->insert('task',$data);
    }
    public function get_users(){
        $this->db->select('user_id, user_name');
		$this->db->where('user_role_id',2);
// 		$this->db->where('id',$id);
        $results = $this->db->get('user')->result_array();
        return $results;
     print_r($results); exit;
        
// 		$this->db->from('user');
// 	    $query = $this->db->get();		
// 		$users = $query->result();
    } 
    //echo'<pre>';print_r($users);die;
}

?>