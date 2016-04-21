<?php
class ShowCrud extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('showModel');
    }
    function index(){
        $bname = $this->session->userdata('bname');

        $userD = $this->showModel->getShow();
        $userArr = array('superarr' => $this->makeArray($userD), 'bname' => $bname);
        $this->load->view('user_info', $userArr);
    }
    function showView(){
        $shows = $this->showModel->getAllShows();
        $showArr = array('superarr' => $this->makeArray($shows));
        $this->load->view('shows_view', $showArr);
    }
    function makeArray($data)
    {
        $newarr = array();
        foreach($data as $obj){
            $array = json_decode(json_encode($obj), true);

            $id = (int)$array['showid'];
            $date = $array['date'];
            $venue = $array['venue'];
            $address = $array['address'];
            $city = $array['city'];
            $state = $array['state'];
            $zip = $array['zipcode'];
            $bname = $array['bname'];
            $user = $array['userid'];

            $newdata = array(
                'id' => $id,
                'date' => $date,
                'venue' => $venue,
                'address' => $address,
                'city' => $city,
                'state' => $state,
                'zip' => $zip,
                'bname' => $bname,
                'userid' => $user
            );
            array_push($newarr, $newdata);
        }
        return $newarr;
    }
    function addShow(){
        $data = array(
            'userid' => $this->session->userdata('userid'),
            'bname' => $this->input->post('bname'),
            'date' => $this->input->post('date'),
            'venue' => $this->input->post('venue'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'zipcode' => $this->input->post('zipcode')
        );
        $this->db->insert('shows', $data);
        redirect('ShowCRUD/index');
    }
    function deleteShow($id){
        $this->db->where('showid', $id);
        $this->db->delete('shows');
        redirect('ShowCRUD/index');
    }
    function updateShow($id){

        $data = array(
            'userid' => $this->session->userdata('userid'),
            'bname' => $this->input->post('bname'),
            'date' => $this->input->post('date'),
            'venue' => $this->input->post('venue'),
            'address' => $this->input->post('address'),
            'city' => $this->input->post('city'),
            'state' => $this->input->post('state'),
            'zipcode' => $this->input->post('zipcode')
        );
        $this->db->where('showid', $id);
        $this->db->update('shows', $data);
        redirect('ShowCRUD/index');
    }
    function getCurrentShow($id){
        $sql = "select * from shows where showid =". $id;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function requestShowUpdate($id){
        $data = $this->getCurrentShow($id);
        $array = json_decode(json_encode($data), true);
        $userD = $this->showModel->getShow();
        $this->load->view('showUpdate_view',array('showdata' => $array, 'superarr' => $this->makeArray($userD)));
    }

}