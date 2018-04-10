<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() 
	{

		// Load's necessários
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('login_model');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('login');
    }
    
    public function login_user(){
        $user_login = array(
            'username' => $this->input->post('username'),
            'senha' => md5($this->input->post('senha')),
        );

        $data = $this->login_model->user_login($user_login['username'], $user_login['senha']);

        if($data) {
            $this->session->set_userdata('login_id', $data['id']);
            redirect('sistema');
        } else {
            $this->session->set_userdata('error_message', 'Utilizador ou senha errados');
            redirect('login');
        }
    }
}
