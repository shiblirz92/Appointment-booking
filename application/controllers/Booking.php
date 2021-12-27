<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('all_model');
        // if(!$this->session->userdata('user_id')){
        //     redirect(base_url().'login');
        // }
    }

    public function insert_booking()
    {
        $formData=$_POST;

        $bookingNumber=$this->all_model->checkBookedDates($_POST['booking_date'],$_POST['doctor']);

        // print_r($bookingNumber);
        echo count($bookingNumber);

        if(count($bookingNumber)<=19)
        {
            foreach($_POST['name'] as $key=>$data)
        {
        //    echo $_POST['name'][$key];
        //    echo $_POST['gender'][$key];
        //    echo $_POST['age'][$key];
        //    echo $_POST['description'][$key];
            $patient['booking_date']=$_POST['booking_date'];
            $patient['doctor_id']=$_POST['doctor'];
           $patient['patient_name'] = $_POST['name'][$key];
           $patient['gender'] = $_POST['gender'][$key];
           $patient['age'] = $_POST['age'][$key];
        //    $patient['description'] = $_POST['description'][$key];
           $patient['description'] =$_POST['description'][$key];

           $patient['user_id'] =$this->session->userdata('user_id');

            $this->all_model->insert('bookings',$patient);
        }

        if(count($bookingNumber)==19)
        {
            $date['booked_date']=$_POST['booking_date'];
            $date['doctor_id']=$_POST['doctor'];
            $date['number_of_bookings']=20;
            $this->all_model->insert('booked_dates',$date);
        }

        $this->session->set_flashdata('message','Booking Success');
        redirect(base_url().'booking/bookAppointment');

        }

        

        


    }

    public function bookAppointment()
	{
		$view['specialization']=$this->all_model->get('specialization');
		$view['page']='booking_calender.php';
		$this->load->view('index',$view);
	}

    public function confirmBooking()
	{

        if(isset($_POST['doctor']))
        {
            $formData=$_POST;
        $view['doctor_id']=$_POST['doctor'];
        $view['doctor']=$this->all_model->getWithCondition('doctors','id',$_POST['doctor']);
        $view['department']=$this->all_model->getWithCondition('specialization','id',$_POST['department']);
		$view['specialization']=$this->all_model->get('specialization');
		$view['page']='Confirm_booking.php';
		$this->load->view('index',$view);
        }
        else
        {
            redirect(base_url().'booking/bookAppointment');
        }
        
	}

    public function fetchDoctor($id)
	{
		$res=$this->all_model->getWithCondition('doctors','department',$id);
        echo json_encode($res);
	}

    public function fetchLiveBookings($id)
	{
		$res=$this->all_model->fetchLiveBookings($id);
        echo json_encode($res);
	}

    public function fetchDate()
	{
        $date=$this->input->get('date');
        $doc_id=$this->input->get('doc');
		$res=$this->all_model->checkBookedDates($date,$doc_id);
        echo json_encode($res);
	}


    public function fetchBookedDates()
	{
        // $date=$this->input->get('date');
        $doc_id=$this->input->get('doc');
		$res=$this->all_model->fetchBookedDates($doc_id);
        echo json_encode($res);
	}

    public function checked($id,$doc_id)
	{
		$data['status']=1;
        $view['data']=$this->all_model->update('bookings','id',$id,$data);
		$this->session->set_flashdata('message','Patient Added To Hold');
		redirect(base_url().'main_controller/profile');
		
	}
}