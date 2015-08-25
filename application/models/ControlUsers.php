<?php
Class ControlUsers extends CI_Model
{
    public function getData($subject)
    {
        $this -> db -> select('id,documentdescription, documentextension, document,semsubject,semester');
        $this -> db -> from('csiteducation');
        $this -> db -> where('semsubject', $subject);
        $query = $this->db->get();
        if($query -> num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            $error = array("errorCode"=>"1", "msg"=>"No Documents");
            return $error;
        }
    }


    public function getUserProfile($user)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$user);
        $query=$this->db->get();
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            $error = array("errorCode"=>"1", "msg"=>"No User Found", "username"=>"");
            return $error;
        }
    }


    public function checkPassword($userid,$oldpassword,$newpassword)
    {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id',$userid);
        $this->db->where('password',$oldpassword);
        $query=$this->db->get();

        if($query-> num_rows() == 1)
        {
            return $this->updatePassword($userid,$newpassword);
        }
        else
        {
            $error = array("errorCode"=>"1", "msg"=>"Wrong Current Password");
            return $error;
        }
    }

    public function updatePassword($userId,$newpassword)
    {
        $data=array('password'=>$newpassword);
        $this->db->where('id',$userId);
        $query=$this->db->update('users', $data);
        if($query)
        {
            $success = array("errorCode"=>"1", "msg"=>"Password Changes Successfully!");
            return $success;
        }
    }
}