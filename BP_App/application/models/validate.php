<?php

class Validate extends CI_Model{
    function validate(){

    }
    function loadsession($data)
    {
        $this->load->library('session');
        $object = $data[0];
        $array = json_decode(json_encode($object), true);

        $id = (int)$array['userid'];
        $bname = $array['bname'];
        $email = $array['email'];

        $newdata = array(
            'userid' => $id,
            'bname' => $bname,
            'email' => $email,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($newdata);
    }

    function login($bname, $pass){
        $sql = 'select * from users where bname = "'.$bname.'"'.' and password = "'.$pass.'"';
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->validate->loadsession($result);
            return true;
        }
    }

}