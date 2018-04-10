<?php

class Register_model extends CI_model {
    public function check_user($user)
	{
		$this->db->select('*');
		$this->db->from('utilizadores');
        $this->db->where('username', $user);
        $query = $this->db->get();
        
        if($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }
    
    public function register_user($user)
	{
		$this->db->insert('utilizadores', $user);
	}
}

?>