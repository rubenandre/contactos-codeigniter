<?php

class Login_model extends CI_model {
    public function user_login($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('utilizadores');
		$this->db->where('username', $user);
		$this->db->where('senha', $pass);

		if($query = $this->db->get())
		{
			return $query->row_array();
		} else {
			return false;
		}
	}
}

?>