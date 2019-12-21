<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
   
    function getusers(){
       $query =$this->db->query("SELECT IF(s.`Role_Id` IS NULL,'User',t.`Role_Name`) role,s.`Full_Name`,s.`Email_Id`,s.`Contact_No`,s.`Id`,d.`Designaiton`,dep.`Department`,c.`Company_Name` FROM staff_tbl s LEFT JOIN `company_tbl` c ON c.`Id`=s.`Company_Id` LEFT JOIN `designation_tbl` d ON d.`Id`=s.`Designation_Id` LEFT JOIN `department_tbl` dep ON dep.`Id`=s.`Department_Id` LEFT JOIN role_tbl t ON t.`Id`=s.`Role_Id` ")->result_array();
        return $query;
    }
   
     
}