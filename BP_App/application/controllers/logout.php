<?php
class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    function index(){
        $this->session->sess_destroy();
        $this->load->view('landing_view');
    }
}