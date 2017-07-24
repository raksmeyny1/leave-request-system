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
class Leavetypes extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('type_model');
        $this->isLoggedIn();
    }
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
      if($this->isAdmin() == TRUE)
      {
          $this->loadThis();
      }else{
        $data['Leavetypes'] = $this->type_model->getalllist();
        $this->load->library('pagination');
        $this->global['pageTitle'] = 'CodeInsect : List of Types';
        $this->loadViews("Leavetypes", $this->global,$data,NULL);

    }
    }

}
