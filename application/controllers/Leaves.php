<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Leaves extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Leaves_model');
        $this->isLoggedIn();
    }
    public function index()
    {
        $this->global['pageTitle'] = 'CodeInsect : Dashboard';
        // $this->loadViews("Leaves/index", $this->global, NULL , NULL);
        redirect('Leaves/ListallLeaveRequest');
  ;  }
    public function addNew()
    {
      if($this->isAdmin() == TRUE)
      {
          $this->loadThis();
      }else{
        $this->load->model('Leaves_model');
        $data['type'] = $this->Leaves_model->getType();
        $data['status'] = $this->Leaves_model->getStatus();
        //var_dump($data['type']);exit();
        $this->global['pageTitle'] = 'CodeInsect : Add new Request';
        $this->loadViews("Leaves/addNew", $this->global, $data , NULL);
     }
    }
    public function addNewRequest()
    {
          $this->load->library('form_validation');
          $this->form_validation->set_rules('leavestype','leavestype','required');
          $this->form_validation->set_rules('duration','duration','required');
          $this->form_validation->set_rules('startdate','startdate','required');
          $this->form_validation->set_rules('enddate','enddate','required');
          //$this->form_validation->set_rules('Comments','Comments','required');
          if($this->form_validation->run() == FALSE)
          {
              $this->addNew();
          }else{
            $leavestype = $this->input->post('leavestype');
            $duration = $this->input->post('duration');
            $startdate = $this->input->post('startdate');
            //var_dump($startdate);exit();
            $enddate = $this->input->post('enddate');
            $leavestatus = $this->input->post('leavestatus');
            $comments = $this->input->post('Comments');
            $data = array('type_id'=>$leavestype, 'duration'=>$duration, 'startdate'=>date('Y-m-d H:i:s',$startdate), 'enddate'=> date('Y-m-d H:i:s',$enddate),'status_id'=>$leavestatus,'comment'=>$comments);
            $this->load->model('Leaves_model');
            $result = $this->Leaves_model->addNewRequest($data);
            if($result > 0)
            {
                          $this->session->set_flashdata('error', 'Request creation failed');
            }
            else
            {

                  $this->session->set_flashdata('success', 'New Request created successfully');
            }
              redirect('Leaves/index');
          }

    }
    public function ListallLeaveRequest()
    {
        $data['listLeaves'] = $this->Leaves_model->ListallLeaveRequest();
        //var_dump($data['listLeaves']);exit();
         $this->loadViews('Leaves/index',$this->global , $data , null);
    }
}
