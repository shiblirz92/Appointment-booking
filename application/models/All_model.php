<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_model extends CI_Model {

public function get($tbl_name)
{
    $query=$this->db->get($tbl_name);
    return $query->result();
}

public function getWithCondition($tbl_name,$column,$id)
{
    $this->db->where($column,$id);
    $query=$this->db->get($tbl_name);
    return $query->result();
}

public function insert($tbl_name,$data)
{
    $query=$this->db->insert($tbl_name,$data);
    if($query)
    {
        return true;
    }

    else{

        return false;
    }
}

public function userLogin($username,$password)
{
    $query=$this->db->query('select * from user where username="'. $username .'" AND password = "'. $password .'"');

    return $query->row();

    
}

public function checkBookedDates($date,$id)
{
    $query=$this->db->query('select * from bookings where booking_date="'. $date .'" AND doctor_id = "'. $id .'"');

    return $query->result();

    
}

public function fetchBookedDates($id)
{
    $query=$this->db->query('select GROUP_CONCAT(booked_date) as disable from booked_dates where  doctor_id = "'. $id .'"');

    return $query->row();

    
}

public function getRowWithCondition($tbl_name,$column,$id)
{
    $this->db->where($column,$id);
    $query=$this->db->get($tbl_name);
   return  $query->row();
}

public function getUserBookingsWithCondition($id)
{
   
    $query=$this->db->query('SELECT booking_date,doctor_id,user_id FROM `bookings` WHERE user_id="'. $id .'" AND status="0" ');
   return  $query->result();
}

public function getUserBooking($id)
{
   
    $query=$this->db->query('SELECT * FROM `bookings` WHERE user_id="'. $id .'" AND status= 0 ');
   return  $query->result();
}

public function fetchLiveBookings($id)
{
    
   $date=date('d/m/Y');
    $query=$this->db->query('SELECT * from bookings where (status = 0 OR status = 4) AND  doctor_id="'. $id .'" AND booking_date="'. $date .'" ORDER BY status ASc');
    // echo $this->db->last_query();
    return $query->result();
}

public function fetchLiveBookingsUnhold($id)
{
    
   $date=date('d/m/Y');
    $query=$this->db->query('SELECT * from bookings where doctor_id="'. $id .'" AND booking_date="'. $date .'" AND status= 0 ');
    // echo $this->db->last_query();
    return $query->result();
}

public function fetchLiveBookingsHold($id)
{
    
   $date=date('d/m/Y');
    $query=$this->db->query('SELECT * from bookings where doctor_id="'. $id .'" AND booking_date="'. $date .'" AND status= 4 ');
    // echo $this->db->last_query();
    return $query->result();
}

public function adminLogin($username,$password)
{
    $query=$this->db->query('select * from admin where username="'. $username .'" AND password = "'. $password .'"');

    return $query->row();

    
}

public function insert_data($data){
    $this->db->insert("doctors",$data);
    // echo  $this->db->last_query() ;

    return true;
}

public function update($tbl_name,$column,$id,$data)
{
    $this->db->set($data);
    $this->db->where($column,$id);
    $query=$this->db->update($tbl_name);
    
}

}