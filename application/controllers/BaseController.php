<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
	public function index(){
        
        $page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('web/index',$page_data);
	}
	function loadpage($param1="",$param2=""){

		$this->load->view('web/about');
	}
    function registerDetails(){
        //data validation required
        $data['Full_Name']=$this->input->post('Name');
        $data['Email_Id']=$this->input->post('email');
        $data['Contact_No']=$this->input->post('contact');
        $data['Password']=$this->input->post('Password');
        $data['Company_Id']=$this->input->post('Company_Name');
        $data['Department_Id']=$this->input->post('department');
        $data['Designation_Id']=$this->input->post('designation');
        $data['Action_Date']=date('Y-m-d');
        $this->CommonModel->do_insert('staff_tbl', $data);    
        if($this->db->affected_rows()>0){
            $page_data['message']='Your registration is submitted. Thank you for using our system';
        }
        else{
            $page_data['message']='Not able to submit your registration detials. Please try again';
        } 
        $this->load->view('web/acknowledgement', $page_data); 

    }
    function loginuser(){
        if($this->input->post('EmailId')!="" &&  $this->input->post('password')!=""){
            //password is not encripted
            $query = $this->db->get_where('staff_tbl', array(
            'Email_Id' => $this->input->post('EmailId'), 'Password' => $this->input->post('password')));
            if ($query->num_rows() > 0){

                $row = $query->row_array(); 
                $this->session->set_userdata('Role_Id', $row['Role_Id']);
                $this->session->set_userdata('Full_Name', $row['Full_Name']);
                $this->session->set_userdata('companyId', $row['Company_Id']);
                $this->session->set_userdata('DesignationId', $row['Designation_Id']);
                $this->session->set_userdata('Id', $row['Id']);
                $this->session->set_userdata('Email_Id', $row['Email_Id']);
                $this->session->set_userdata('Contact_No', $row['Contact_No']);
                redirect(base_url() . 'index.php?baseController/dashboard', 'refresh');
            } 
            else{
                $page_data['message']='Invalid email and password';
                $this->load->view('web/acknowledgement', $page_data); 
            }
        } 
        else{
             $page_data['message']='Email and password is required';
                $this->load->view('web/acknowledgement', $page_data); 
        }

    }
    function dashboard(){
        $page_data['message']="";
        if ($this->session->userdata('Full_Name') == null ){
            redirect(base_url(), 'refresh');
        }
        else{
            $page_data['Application_List'] =$this->CommonModel->getAllApplicationSubmitted('group');
            $page_data['MyApplication_List'] =$this->CommonModel->getAllApplicationSubmitted('my');
            $page_data['reject_Application_List'] =$this->CommonModel->getAllApplicationSubmitted('rejected');
            $this->load->view('admin/dashboard', $page_data);
        }
    }
    function logout($param=''){  
        $this->session->unset_userdata(0);
        $this->session->sess_destroy();
        $this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url().'index.php?baseController/', 'refresh');
    }
}
