<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function __construct() 
	{

		// Load's necessários
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('sistema_model');
		$this->load->library('session');
	}

	public function index(){
        $user_id = $this->session->userdata('login_id');
        $dados['num'] = $this->sistema_model->get_number_contacts($user_id);
		$this->load->view('sistema', $dados);
    }

    public function contactos(){
        $user_id = $this->session->userdata('login_id');
        $data['query'] = $this->sistema_model->get_all_data($user_id);
        $this->load->view('contactos', $data);
    }

    public function add(){
        $this->load->view('add');
    }

    public function add_contacto(){
        $contacto = array(
            'nome' => $this->input->post('nome'),
            'telemovel' => $this->input->post('telemovel'),
            'cidade' => $this->input->post('cidade'),
            'utilizadores_id' => $this->input->post('utilizadores_id')
        );

        $this->sistema_model->addContact($contacto);
        redirect('sistema/contactos');       
    }

    public function edit(){
        $id = $this->input->post('id_contacto');
        $user_id = $this->session->userdata('login_id');
		
		$dados['editar'] = $this->sistema_model->getEdit($id, $user_id);

		$this->load->view('edit', $dados);
    }

    public function update_contact(){
        $user_id = $this->session->userdata('login_id');
		$dados = array(
            'nome' => $this->input->post('nome'),
			'telemovel' => $this->input->post('telemovel'),
            'cidade'  => $this->input->post('cidade'),
            'utilizadores_id' => $user_id
		);
        $sid = $this->input->post('id_contacto');


		$this->sistema_model->updateContact($sid, $dados);
		redirect('sistema/contactos');
		
    }

    public function delete(){
        $id = $this->input->post('id_contacto');
        $user_id = $this->session->userdata('login_id');

        $this->sistema_model->deleteContact($id, $user_id);
        redirect('sistema/contactos');
    }

    
}

?>