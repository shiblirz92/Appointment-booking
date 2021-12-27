<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('all_model');
        // if($this->session->userdata('user_id')){
        //     redirect(base_url());
        // }
    }

    public function index()
	{
       
        $user_id = $this->session->userdata('user_id');
        if ($user_id == "" || empty($user_id)) {
            $view['page']='userLogin.php';
            $this->load->view('index',$view);;
            
        } else {
            redirect(base_url().'Main_controller');
        }
		// $view['page']='userLogin.php';
		// $this->load->view('index',$view);
	}

    public function loginCheck()
    {
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $data=$this->all_model->userLogin($username,$password);
        if(!empty($data))
        {
            $this->session->set_userdata(array('user_id'=>$data->id,'username'=>$data->username , 'profile_picture'=>$data->profile_picture));
            redirect(base_url());
            
            


        }

        else{
            $this->session->set_flashdata("error_message", "Wrong Username Password");
            redirect(base_url().'login');
        }
    }





    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('profile_picture');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata("msg_success", "Successfully Logout...");
        redirect(base_url()."login");
    }
}