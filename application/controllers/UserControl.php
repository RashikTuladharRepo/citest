<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserControl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ControlUsers', '', TRUE);
    }

    public function redirectDashboard()
    {
        $this->load->view('dashboard');
    }

    public function renderPage($subject, $subject_full)
    {
        $this->session->set_userdata('subject', $subject_full);
        $data['records'] = $this->ControlUsers->getData($subject);
        $this->load->view('pages', $data);
    }

    public function getProfile($user)
    {
        $data['user_records'] = $this->ControlUsers->getUserProfile($user);
        $this->load->view('changepassword', $data);
    }

    public function updateProfile()
    {
        //This method will have the credentials validation
        $this->load->library(array('form_validation'));
        $this->load->helper('security');

        if($this->input->post('oldpassword')!="")
        {
            $config=array(
              array(
                  array(
                      'field'   => 'oldpassword',
                      'label'   => 'Full Name',
                      'rules'   => 'trim|required|xss_clean'
                  ),
                  array(
                      'field'   => 'newpassword',
                      'label'   => 'New Password',
                      'rules'   => 'trim|required|min_length[6]|matches[renewpassword]|sha1'
                  ),
                  array(
                      'field'   => 'renewpassword',
                      'label'   => 'New Password Confirmation',
                      'rules'   => 'trim|required|min_length[6]|sha1'
                  )
              )
            );

            $this->form_validation->set_rules($config);
            if($this->form_validation->run() == FALSE)
            {

                $data['user_records'] = $this->ControlUsers->getUserProfile($this->input->post('user'));
                $this->load->view('userprofile',$data);
            }
        }
    }



    public function changePassword($userid)
    {
        $oldpassword=sha1($this->input->post('oldpassword'));
        $newpassword=sha1($this->input->post('newpassword'));

        $data['result']=$this->ControlUsers->checkPassword($userid,$oldpassword,$newpassword);

        $this->load->view('changepassword',$data);
    }
}