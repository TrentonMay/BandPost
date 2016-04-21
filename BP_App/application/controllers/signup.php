<?php
class SignUp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('email');
    }
    function index(){
        $bname = $this->input->post('bname');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        if(valid_email($email)){
            $data = array(
                'bname' => $bname,
                'password' => $password,
                'email' => $email
            );
            $this->db->insert('users', $data);
            echo "<script type='text/javascript'>alert('Success! You may now sign in')</script>";
            $this->load->view('login_view');
        }else{
            echo "<script type='text/javascript'>alert('Your email was not valid. Please try again')</script>";
            $this->load->view('login_view');
        }
    }
}