<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() 
	{

		// Load's necessários
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('register_model');
		$this->load->library('session');
    }
    
    public function index()
	{
		$this->load->view('register');
    }

    public function register_user(){
        $user_register = array(
            'username' => $this->input->post('username'),
            'senha' => md5($this->input->post('senha')),
            'nome' => $this->input->post('nome'),
            'apelido' => $this->input->post('apelido')
        );

        $confirmUser = $this->register_model->check_user($user_register['username']);

        if($confirmUser){
            $this->register_model->register_user($user_register);
			$this->session->set_flashdata('sucess_message', 'Utilizador cadastrado com sucesso.');
			redirect(base_url('login'));
        }

        if(!$confirmUser)
		{
			$this->session->set_flashdata('error_message', 'O utilizador já existe');
			redirect(base_url('register'));
		}
    }
}