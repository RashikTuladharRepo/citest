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
        $this->db->where('username',$user);
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
}