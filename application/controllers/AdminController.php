<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}
	function loadPage($page=""){
		$page_data['userList'] =$this->CommonModel->getusers();
		$page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
		$page_data['rolelist'] = $this->db->get_where('role_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$page,$page_data);

	}
	function deleteuser($iserId="",$page=""){
		$this->db->where('Id', $iserId);
        $this->db->delete('staff_tbl');
        $page_data['rolelist'] = $this->db->get_where('role_tbl',array('Status'=>'Y'))->result_array();
        $page_data['userList'] =$this->CommonModel->getusers();
		$this->load->view('admin/'.$page,$page_data);
	}
	function Updaterole($page=""){
        $data['Role_Id']=$this->input->post('Company_Name');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('staff_tbl`', $data);
        $page_data['rolelist'] = $this->db->get_where('role_tbl',array('Status'=>'Y'))->result_array();
        $page_data['userList'] =$this->CommonModel->getusers();
		$this->load->view('admin/'.$page,$page_data);
	}
	function Updatecompany($param1=""){
		$data['Company_Name']=$this->input->post('companyName');
		$data['Company_Shortname']=$this->input->post('companyshort');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('company_tbl`', $data);
        $page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$param1,$page_data);
	}

	function deletecompany($companyId="",$page=""){
		$this->db->where('Id', $companyId);
        $this->db->delete('company_tbl');
        $page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
  		$this->load->view('admin/'.$page,$page_data);
	}

	function addcompany($page=""){
        $data['Company_Name']=$this->input->post('companyName');
        $data['Company_Shortname']=$this->input->post('companyshort');
        $this->CommonModel->do_insert('company_tbl', $data); 
        $page_data['companyList'] = $this->db->get_where('company_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$page,$page_data);
	}
	
	function Updatedepartment($param2=""){
		$data['Department']=$this->input->post('departmentName');
		$data['Department_short']=$this->input->post('departmentshort');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('department_tbl`', $data);
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$param2,$page_data);
	}

	function deletedepartment($departmentId="",$page=""){
		$this->db->where('Id', $departmentId);
        $this->db->delete('department_tbl');
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
  		$this->load->view('admin/'.$page,$page_data);
	}

	function adddepartment($page=""){
        $data['Department']=$this->input->post('departmentName');
        $data['Department_short']=$this->input->post('departmentshort');
        $this->CommonModel->do_insert('department_tbl', $data); 
        $page_data['departmentList'] = $this->db->get_where('department_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$page,$page_data);
	}


	
	function Updatedesignation($param3=""){
		$data['Designaiton']=$this->input->post('designationName');
        $this->db->where('Id',  $this->input->post('deleteId'));
        $this->db->update('designation_tbl', $data);
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$param3,$page_data);
	}

	function deletedesignation($designationId="",$page=""){
		$this->db->where('Id', $designationId);
        $this->db->delete('designation_tbl');
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
  		$this->load->view('admin/'.$page,$page_data);
	}

	function adddesignation($page=""){
        $data['Designaiton']=$this->input->post('designationName');
        $this->CommonModel->do_insert('designation_tbl', $data); 
        $page_data['designationList'] = $this->db->get_where('designation_tbl',array('Status'=>'Y'))->result_array();
		$this->load->view('admin/'.$page,$page_data);
	}

}

