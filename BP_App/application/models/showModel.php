<?php
class ShowModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('validate');
    }
    function getShow(){
        $uid = $this->session->userdata('userid');
        $sql = "select * from shows where userid =". $uid." order by date";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }
    function getAllShows(){
        $sql = "select * from shows order by date";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function getSearchShow($zip){
        $sql = "select * from shows where zipcode =". $zip;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}