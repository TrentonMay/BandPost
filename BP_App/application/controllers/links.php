<?php
class Links extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
    }
    function homeLink(){
        $this->load->view('landing_view');
    }
    function loginLink(){
        $this->load->view('login_view');
    }
    function showsLink(){
        $this->load->view('allShows_view');
    }
}

?>