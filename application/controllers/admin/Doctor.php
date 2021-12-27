<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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
		$view['page']='doctors.php';
		$this->load->view('admin/index',$view);
	}

    public function addDoctor()
	{
        $view['specialization']=$this->all_model->get('specialization');
		$view['page']='addDoctor.php';
		$this->load->view('admin/index',$view);
	}

	public function form_validation(){
		
			
		$data['name']=$this->input->post('name');
		$data['department']=$this->input->post('Speciality');
		$data['email']=$this->input->post('email');
		$data['password']=md5($this->input->post('password'));
		$data['phone_number']=$this->input->post('phoneNumber');
		$data['place']=$this->input->post('place');



		$response=$this->all_model->insert_data($data);
		if($response==true){
			$this->session->set_flashdata('message','Doctor Added');
			redirect(base_url().'admin/doctor/addDoctor');
		}
		else{
			$this->session->set_flashdata('message','Not Added');
			redirect(base_url().'admin/doctor/addDoctor');
		}
	
}



	
}