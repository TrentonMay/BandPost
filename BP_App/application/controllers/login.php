<?php

class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->library('session');
        $this->load->model('validate');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('bname', 'bname', 'required');
        $this->form_validation->set_rules('passwordinput', 'passwordinput', 'required');

        $user = $_POST['bname'];
        $pass = $_POST['passwordinput'];


        $query = $this->validate->login($user, $pass);

        if($this->form_validation->run() == TRUE && $query)
        {
            redirect('ShowCRUD/index');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Your Login Information is incorrect')</script>";
            $this->load->view('login_view');
        }


    }
}
?>