<?php
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

    function __construct(){

        parent::__construct();

        $flag = $this->session->userdata('flag');

        if($flag == NULL){

            redirect('admin','refresh');
        }
    }

    public function logout(){

        $this->session->unset_userdata('flag');
        $this->session->unset_userdata('username');
        $data['message'] = 'You are successfully logged out';
        $this->session->set_userdata($data);

        redirect('admin','refresh');
    }

    public function index(){

        $data = array();
        $data['title'] = "Home";
        $data['heading'] = "Main Menu";
        $data['content'] = $this->load->view('home',$data,true);
        $this->load->view('master',$data);
    }

    public function employee(){

        $data = array();
        $data["title"] = "Employee";
        $data["heading"] = "Employee Details";
        $data["base_url"] = base_url() . "site/employee";
        $data["total_rows"] = $this->employee_model->record_count();
        $data["per_page"] = 2;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->employee_model->fetch_employee($data["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('employee',$data,true);
        $this->load->view('master',$data);
    }

    public function salary(){

        $data = array();
        $data["title"] = "Salary";
        $data["heading"] = "Salary Details";
        $data["base_url"] = base_url() . "site/salary";
        $data["total_rows"] = $this->salary_model->record_count();
        $data["per_page"] = 2;
        $data["uri_segment"] = 3;

        $this->pagination->initialize($data);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["results"] = $this->salary_model->fetch_salary($data["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $data["content"] = $this->load->view('salary',$data,true);
        $this->load->view('master',$data);
    }

    public function profile(){

        $data = array();
        $data['title'] = "Profile";
        $data['heading'] = "Admin Details";
        $data['content'] = $this->load->view('profile',$data,true);
        $this->load->view('master',$data);
    }

    public function settings(){

        $data = array();
        $data['title'] = "Settings";
        $data['heading'] = "System Management";
        $data['content'] = $this->load->view('settings',$data,true);
        $this->load->view('master',$data);
    }

    public function create(){

        $data = array();
        $data['title'] = "Create Admin";
        $data['heading'] = "Create New Admin";
        $data['content'] = $this->load->view('create',$data,true);
        $this->load->view('master',$data);
    }

    public function create_admin(){

        $data = array();
        $data['admin_username'] = $this->input->post('username',true);
        $data['admin_password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        $data['admin_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->admin_model->save_admin($data);

        redirect('site');
    }

    public function reset(){

        $data = array();
        $data['title'] = "Reset Password";
        $data['heading'] = "Reset Admin Password";
        $data['content'] = $this->load->view('reset',$data,true);
        $this->load->view('master',$data);
    }

    public function reset_password(){

        $data = array();
        $admin_id = $this->session->userdata('flag');
        $data['admin_password'] = hash("SHA512",$this->input->post('password',true));
        $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        $data['admin_salt'] = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);
        $this->admin_model->update_password_by_id($admin_id,$data);

        redirect('site');
    }

    public function search(){

        $term = $this->input->get('search',true);
        $this->employee_model->search_employee($term);
    }
}