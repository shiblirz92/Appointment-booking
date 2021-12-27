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
		$view['data']=$this->all_model->getWithCondition('bookings','status',0);
		// $view['data']=$this->all_model->get('bookings');

		$view['page']='bookings.php';
		$this->load->view('admin/index',$view);
	}

	public function getBookings()
	{
		$view['specialization']=$this->all_model->get('specialization');
		$view['page']='getBookings.php';
		$this->load->view('admin/index',$view);
	}

    public function livePatients()
	{
		if(isset($_GET['doctor'])&&$_GET['doctor']!="")
		{
			$id=$_GET['doctor'];
        $view['data']=$this->all_model->fetchLiveBookings($id);
		$view['page']='livePatients.php';
		$this->load->view('admin/index',$view);
		}

		else{
			redirect(base_url().'admin/booking/getBookings');
		}
		
	}

	public function holdPatients()
	{
        $view['data']=$this->all_model->fetchLiveBookingsHold($id);
		$view['page']='holdedPatients.php';
		$this->load->view('admin/index',$view);
	}

	public function hold($id,$doc_id)
	{
		$data['status']=4;
        $view['data']=$this->all_model->update('bookings','id',$id,$data);
		$this->session->set_flashdata('message','Patient Added To Hold');
		redirect(base_url().'admin/booking/livePatients?doctor='.$doc_id);
		
	}

	public function unhold($id,$doc_id)
	{
		$data['status']=0;
        $view['data']=$this->all_model->update('bookings','id',$id,$data);
		$this->session->set_flashdata('message','Patient Added To Hold');
		redirect(base_url().'admin/booking/livePatients?doctor='.$doc_id);
		
	}

	public function checked($id,$doc_id)
	{
		$data['status']=3;
        $view['data']=$this->all_model->update('bookings','id',$id,$data);
		$this->session->set_flashdata('message','Patient Added To Hold');
		redirect(base_url().'admin/booking/livePatients?doctor='.$doc_id);
		
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