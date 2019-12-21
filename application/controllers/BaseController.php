<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
	public function index(){
        
        $page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('web/index',$page_data);
	}
<<<<<<< HEAD
	function loadpage($param1="",$param2=""){

		$this->load->view('web/about');
	}
=======
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
>>>>>>> 50ea0163bf3cf7f3ae7f46937476110054832ba5
}
