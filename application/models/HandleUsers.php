<?php
Class HandleUsers extends CI_Model
{
    function login($username, $password)
    {
        $this -> db -> select('*');
        $this -> db -> from('users');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', SHA1($password));
        $this -> db -> limit(1);
        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    function signUpNewUser($userInfo)
    {
        $this->db->insert('users', $userInfo);
    }


    function userExists($email)
    {
        $sql="select email from users where email='$email'";
        $query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        else{
            return false;
        }
    }

    function availablityUser($email){
        $sql="select email from users where email='$email'";
        $query=$this->db->query($sql);
        if ($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>