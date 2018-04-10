<?php

class Sistema_model extends CI_model {
    public function get_number_contacts($user_id){
        $this->db->select('*');
        $this->db->from('contactos');
        $this->db->where('utilizadores_id', $user_id);
        $query = $this->db->get();
        $num = $query->num_rows();
        return $num;

    }

    public function addContact($contacto)
	{
        $this->db->insert('contactos', $contacto);
    }
    
    public function get_all_data($id)
    {
        $this->db->select('*');
        $this->db->from('contactos');
        $this->db->where('utilizadores_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getEdit($id, $user_id)
    {
        $this->db->select('*');
        $this->db->from('contactos');
        $this->db->where('id', $id);
        $this->db->where('utilizadores_id', $user_id);
        $editar = $this->db->get();
        return $editar->result();
    }

    public function updateContact($id, $dados) {
        $this->db->where('id', $id);
        $this->db->update('contactos', $dados);
        return true;
    }

    public function deleteContact($id, $user_id){
        $this->db->where('id', $id);
        $this->db->where('utilizadores_id', $user_id);
        $this->db->delete('contactos');
    }
}

?>