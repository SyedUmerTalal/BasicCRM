<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
  
class User_model extends CI_Model {  

    public function insert($table,$data) {  
        $query = $this->db->insert('user',$data);
    }
}  
?>