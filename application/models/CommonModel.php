<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
    function getfromtable($param1='',$param2='',$param3='',$param4='',$param5=''){
        if($param2=='allrows'){
            return $this->db->get($param1)->result_array();
        }
        if($param2=='row'){ 
            return $this->db->get($param1)->row();
        }
        if($param2=='allrowbyStatus'){
            return $this->db->get_where($param1, array('Status'=>'Y'))->result_array();
        }
        if($param2=='condition1'){
            $str1= explode('/', $param3);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1]))->row();
        }
        if($param2=='allrowscondition1'){ 
            $str1= explode('/', $param3);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1]))->result_array();
        } 
        if($param2=='allrowscondition2'){
            $str1= explode('/', $param3);
            $str2= explode('/', $param4);
            return $this->db->get_where($param1, array($str1[0]=>$str1[1], $str2[0]=>$str2[1]))->result_array();
        }
    } 
    function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    function checkCID($param1="",$param2=""){
        $query ="";
        $name=str_replace("%20", " ", $param1);
        if(trim($param2)=="mainmenu"){
            $query =$this->db->get_where('t_menu_master', array('MenuName'=>trim($name)))->row();
        }
        else{
            $query =$this->db->get_where('t_sub_menu_master', array('SubMenuName'=>$param1))->row();
        }
        if($query!=null && $query!=""){
            return "This name is already mentioned. Please provice different name ";
        }
        else{
            return "false";
        }
    }
    function getmainmenuid($id=""){
        $query =$this->db->query("SELECT * FROM `t_vacancy_application` WHERE CID='".$param1."' AND VacancyId='".$param2."' ")->row();
        if($query!=null && $query!=""){
            return "Already applied for the post of ".$query->AppliedPost;
        }
        else{
            return "false";
        }
    }
    function getEventList($type=""){
        if($type=="firstfive"){
            $query =$this->db->query("SELECT e.`Id`,e.`Event_Name`,e.`Posted_Date`,e.`Event_Type`,e.`Event_Description`,i.`Image` FROM `t_event_dtls` e INNER JOIN `t_event_images` i ON e.`Id`=i.`Event_Id` GROUP BY e.`Id` DESC LIMIT 5 ")->result_array();
        }
        else{
           $query =$this->db->query("SELECT e.`Id`,e.`Event_Name`,e.`Posted_Date`,e.`Event_Type`,e.`Event_Description`,i.`Image` FROM `t_event_dtls` e INNER JOIN `t_event_images` i ON e.`Id`=i.`Event_Id` GROUP BY e.`Id` ")->result_array(); 
        }
        return $query;
    }
    function gettourList(){
        $query =$this->db->query("SELECT e.`Id`,e.`Category_Id`,e.`Package_Name` FROM `t_tour_package_details` e")->result_array(); 
        return $query;
    }
    function gettoruList($param1=""){
        $query =$this->db->query("SELECT t.`Id`,t.`Package_Name`,i.`Image`,t.`Number_Days`,t.`Charge`,t.`Currency` FROM `t_tour_package_details` t LEFT JOIN `t_tour_package_images` i ON t.`Id`=i.`Package_Id` WHERE t.`Category_Id`='".$param1."' GROUP BY t.`Id`")->result_array(); 
        return $query;
        ;
    }
     
}