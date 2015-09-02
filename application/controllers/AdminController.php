<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ControlUsers', '', TRUE);
//session check from the custom helper
        is_logged_in();
    }
//Upload Notes
    public function uploadNotes()
    {
        $this->load->view('admin/uploadnotes');
    }

}