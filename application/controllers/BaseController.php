<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BaseController extends CI_Controller {
	public function index(){
		$this->load->view('web/index');
	}
	function loadpage($param1="",$param2=""){

		$this->load->view('web/about');
	}
}
