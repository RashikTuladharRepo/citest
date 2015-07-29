<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserHandler extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('HandleUsers','',TRUE);
    }

    public function loginControl()
    {
        //This method will have the credentials validation
        $this->load->library(array('form_validation'));
        $this->load->helper('security');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('portal');
        }
        else
        {
            redirect('UserHandler/redirectUsers', 'refresh');
        }
    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->HandleUsers->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }



    function redirectUsers()
    {
        if($this->session->userdata('logged_in'))
        {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('dashboard', $data);
        }
        else
        {
            //If no session, redirect to login page
            redirect('Portal', 'refresh');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('Portal', 'refresh');
    }

    function signUp()
    {
        $this->load->view('signup');
    }

    public function signUpUser(){
        //This method will have the credentials validation
        $this->load->library(array('form_validation'));
        $this->load->helper('security');

        $config = array(
            array(
                'field'   => 'fName',
                'label'   => 'Full Name',
                'rules'   => 'trim|required|min_length[5]|xss_clean'
            ),
            array(
                'field'   => 'address',
                'label'   => 'Address',
                'rules'   => 'trim|required|min_length[5]|xss_clean'
            ),
            array(
                'field'   => 'college',
                'label'   => 'College',
                'rules'   => 'trim|required|min_length[5]|xss_clean'
            ),
            array(
                'field'   => 'email',
                'label'   => 'Email Address',
                'rules'   => 'trim|required|min_length[10]|valid_email|xss_clean'
            ),
            array(
                'field'   => 'username',
                'label'   => 'Username',
                'rules'   => 'trim|required|min_length[5]|max_length[12]|xss_clean|callback_checkUser'
            ),
            array(
                'field'   => 'password',
                'label'   => 'Password',
                'rules'   => 'trim|required|matches[repassword]|sha1'
            )
        ,
            array(
                'field'   => 'repassword',
                'label'   => 'Password Confirmation',
                'rules'   => 'trim|required'
            )
            );

        $this->form_validation->set_rules($config);
        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('signup');
        }
        else
        {
            $data = array(
                'fullName' => $this->input->post('fName'),
                'address' => $this->input->post('address'),
                'college' => $this->input->post('college'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );
            $this->HandleUsers->signUpNewUser($data);
            $data['message'] = 'Data Inserted Successfully';
            $this->load->view('portal',$data);
        }
    }

    function checkUser()
    {
        $username = $this->input->post('username');
        $result = $this->HandleUsers->userExists($username);
        if($result)
        {
            $this->form_validation->set_message('checkUser', 'User Name Not Available');
            return false;
        }
        else{
            return true;
        }
    }
}