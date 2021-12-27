<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('all_model');
    }
	
	public function index()
	{
		$admin_id = $this->session->userdata('admin_id');
        if ($admin_id == "" || empty($admin_id)) {
            $this->load->view('admin/adminlogin');
            
        } else {
           
	
        // $view['specialization']=$this->all_model->get('specialization');
		$view['page']='dashboard.php';
		$this->load->view('admin/index',$view);
	
        }
		
		
	}

	public function loginCheck()
    {
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $data=$this->all_model->adminLogin($username,$password);
        if(!empty($data))
        {
            $this->session->set_userdata(array('admin_id'=>$data->id,'adminname'=>$data->username , 'profile_picture'=>$data->profile_picture));
            redirect(base_url().'admin/login');
            print_r($data);
            


        }

        else{
            $this->session->set_flashdata("message", "wrong Username Or password");
            redirect(base_url().'admin/login');
        }
    }

	public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('profile_picture');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata("msg_success", "Successfully Logout...");
        redirect(base_url()."admin/login");
    }

	
}

