<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){

        parent::__construct();

        $flag = $this->session->userdata('flag');

        if($flag != NULL){

            redirect('site','refresh');
        }
    }

	public function index(){

		$this->load->view('login');
	}

    public function authentication(){

        $username = $this->input->post('username',true);
        $password = hash("SHA512",$this->input->post('password',true));
        $result = $this->admin_model->login($username,$password);

        if($result){

            $data['flag'] = $result->admin_id;
            $data['username'] = $result->admin_username;
            $this->session->set_userdata($data);

            redirect('site');
        }
        else{

            $data = array();
            $data['exception'] = 'Your User Id / Password Invalid!';
            $this->session->set_userdata($data);

            redirect('admin');
        }
    }
}