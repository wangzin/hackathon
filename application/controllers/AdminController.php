<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function index(){
	}
	function loadPage($page=""){
		$page_data['userList'] =$this->CommonModel->getusers();
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
	
}

