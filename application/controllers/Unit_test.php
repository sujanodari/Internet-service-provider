<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_test extends CI_Controller {
public function __construct()
{
parent::__construct(); 	
$this->load->library('unit_test');
}


public function index()
{
	/*insert test*/
 $this->unit->run($this->Insert->addPic("980009","9800099.jpg"),True,"Profile Image Addition By User Test Function");
 $this->unit->run($this->Insert->addBandwidth(9,"Home",700),True,"Bandwidth Addition By Staff Test Function");
 $this->unit->run($this->Insert->addStaff("Hari","male","2015-07-09","Katmandu","980009","user","09-9-0987"),True,"Staff Addition By Manager Test Function");
 $this->unit->run($this->Insert->addUsers(7,3,"1300","Ram","male","2015-07-09","Katmandu","90879","user","09-9-0987"),True,"Customer order Test Function");
 
 
 /*Retrive test*/
 $this->unit->run($this->Retrive->checkLogin("sujan","sujan1"),'is_object',"ChekLogin Test Function");
 $this->unit->run($this->Retrive->getUsers("sujan"),'is_object',"Get users info by Username Test Function");
 $this->unit->run($this->Retrive->getUserss("manager"),'is_object',"Get users info by Type Test Function");
 $this->unit->run($this->Retrive->users_exists("sujan"),false,"Check User already exist or not Test Function");
 $this->unit->run($this->Retrive->getBandwidth(),'is_object',"Get All Bandwidth Test Function");
 $this->unit->run($this->Retrive->getBandwidthByBandwidth(20,"Home"),'is_object',"Get Bandwidth by BandwidthTest Function");
 $this->unit->run($this->Retrive->getBandwidthId("90879"),'is_object',"Get Bandwidth Id by Username Test Function");
 $this->unit->run($this->Retrive->getBandwidthById(1),'is_object',"Get Bandwidth by Id Test Function");
 $this->unit->run($this->Retrive->getBandwidthByIdd(7,"90879"),'is_object',"Get Bandwidth by Id and Username Test Function");
 $this->unit->run($this->Retrive->getPic("Sujan"),'is_object',"Get profile picture location Test Function");
  
  /*update test*/ 
$this->unit->run($this->Updatee->updateUsers("Hari","male","2015-07-09","Katmandu","980009","980009","Hari") ,True,"Update Customer Profile Test Function");
$this->unit->run($this->Updatee->updateUsersPassword("hari","980009") ,True,"Update User Password Test Function");
$this->unit->run($this->Updatee->updateBandwidth(9,"Home",800) ,True,"Update Bandwidth Price Test Function");
$this->unit->run($this->Updatee->updateUsersBandwidth(2,800,"980009",6) ,True,"Update Customer Bandwidth Test Function");
$this->unit->run($this->Updatee->updatePic("980009","980009.jpg") ,True,"Update Customer Profile Test Function");

 
  /*deletee test*/
 $this->unit->run($this->Deletee->deleteUser("90879"),True,"Delete Customer Test Function");
 $this->unit->run($this->Deletee->deleteUser("980009"),True,"Delete Staff Test Function");
 $this->unit->run($this->Deletee->deleteBandwidth(9,"Home"),True,"Delete Staff Test Function");
 
 $this->load->view('tests');
}

}
?>