<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Controller extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('all_model');
    }
	public function index()
	{
		$view['page']='Homepage.php';
		$this->load->view('index',$view);
	}

	

	public function userSignUp()
	{
		$view['page']='userSignUp.php';
		$this->load->view('index',$view);
		
	}

	public function registerUser()
	{

		$this->form_validation->set_rules('username','Username','required|is_unique[user.username]');
		// $this->form_validation->set_error_delimiters('<div>','</div>');

		if($this->form_validation->run())
		{
			$formData=$_POST;
		

		$formData['password']=md5($_POST['password']);
		print_r($formData);

		$this->all_model->insert('user',$formData);
		// $this->session->set_flashdata()
		redirect(base_url().'login');
		}

		else 
		{
			$view['error']=validation_errors();
			$view['page']='userSignUp.php';
			$this->load->view('index',$view);
		}


		
		
	}

	public function userProfile()
	{
		$view['page']='aboutUs.php';
		$this->load->view('index',$view);
	}

	public function Profile()
	{
		if(!$this->session->userdata('user_id')){
            redirect(base_url().'login');
        }
		$id=$this->session->userdata('user_id');
		$view['userDetails']=$this->all_model->getRowWithCondition('user','id',$id);
		// $view['booking']=$this->all_model->getWithCondition('bookings','user_id',$id);
		$view['booking']=$this->all_model->getUserBooking($id);
		$view['page']='profile.php';
		$this->load->view('index',$view);
	}

	public function tracking()
	{
		$view['specialization']=$this->all_model->get('specialization');
		$view['page']='liveTracking.php';
		$this->load->view('index',$view);
	}

	public function liveStatus()
	{
		if(isset($_GET['doctor']))
		{
			$view['doctor']=$_GET['doctor'];
		$view['page']='livestatus.php';
		$this->load->view('index',$view);
		}

		else{
			redirect(base_url().'main_controller/tracking');
		}
		
	}

	
}

