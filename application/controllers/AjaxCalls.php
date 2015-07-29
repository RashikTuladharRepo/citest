<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxCalls extends CI_Controller{

    public function index()
    {
        echo "hello";
        die();
        $methodName=$this->input->post('method');
        echo $methodName;
        die();
        switch($methodName)
        {
            case "checkuserexist":
                $userName=$this->input->post('username');
                $sql="select * from users where username='$userName'";
                $query = $this -> db -> query($sql);
                if ($query->num_rows() > 0) {
                    echo "reached here";
                    die();
                }
                break;
            default:
                $this->load->view('portal');
        }
    }


}