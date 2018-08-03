<?php

class Sign_up_rec_M extends MY_Model 

{
    function __construct() {

        parent::__construct();

    }
    public function sign_up($data)
    {
        //var_dump($data);exit();
        $result=$this->db->insert('employer',$data);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_id($email)
    {
        $sql="SELECT id FROM employer WHERE email='$email';";
        $query=$this->db->query($sql);
        return $query->row()->id;
    }
    public function check_already_exist($email)
    {
        $sql="SELECT email FROM employer WHERE email='$email';";
        $query=$this->db->query($sql);
        if($query->num_rows() == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function check_url($id)
    {
        $sql="SELECT id FROM employer WHERE id='$id' AND status= 0;";
        $query=$this->db->query($sql);
        if($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_name($id)
    {
        $sql="SELECT name FROM employer WHERE id='$id';";
        $query=$this->db->query($sql);
        return $query->row()->name;
    }
    public function set_password($password,$id)
    {
        $sql="UPDATE employer SET password='$password',status= 1 WHERE id='$id';";
        //echo $sql;exit();
        $query=$this->db->query($sql);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function get_designation()
    {
        $sql="SELECT * FROM designations ORDER BY designation_name ASC;";
        $query=$this->db->query($sql);
        return $query->result();
    }
}

?>