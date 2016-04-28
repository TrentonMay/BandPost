<?php
class SignUp extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('email');
        $this->load->helper('captcha');
    }
    function index(){
        $salty = 'YouSaltyBruh';
        $bname = $this->input->post('bname');
        $password = $this->input->post('password');
        $encrypt = md5($password.$salty);
        $email = $this->input->post('email');
        if(valid_email($email)){
            $data = array(
                'bname' => $bname,
                'password' => $encrypt,
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