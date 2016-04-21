<?php
class AlbumModel extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('validate');
    }
    function getAlbum(){
        $uid = $this->session->userdata('userid');
        $sql = "select * from albums where userid =". $uid." order by year";
        $query = $this->db->query($sql);
        $result = $query->result();

        return $result;
    }
    function getAllAlbums(){
        $sql = "select * from albums order by year";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
}