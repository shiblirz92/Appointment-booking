<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('all_model');
		if(!$this->session->userdata('admin_id')){
            redirect(base_url().'admin');
        }
    }
	
	public function index()
	{
		$view['data']=$this->all_model->get('doctors');
		// $view['data']=$this->all_model->get('bookings');

		$view['page']='bookings.php';
		$this->load->view('admin/index',$view);
	}

    public function livePatients()
	{
        // $view['specialization']=$this->all_model->get('specialization');
		$view['page']='livePatients.php';
		$this->load->view('admin/index',$view);
	}

	public function addAdmin()
	{
        // $view['specialization']=$this->all_model->get('specialization');
		$view['page']='addAdmin.php';
		$this->load->view('admin/index',$view);
	}

	public function adminDetails()
	{
		$view['data']=$this->all_model->get('admin');
        // $view['specialization']=$this->all_model->get('specialization');
		$view['page']='admin.php';
		$this->load->view('admin/index',$view);
	}



	
}