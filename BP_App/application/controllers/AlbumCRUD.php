<?php
class AlbumCrud extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('albumModel');
    }
    function index(){
        $bname = $this->session->userdata('bname');
        $userD = $this->albumModel->getAlbum();
        $userArr = array('superarr' => $this->makeArray($userD), 'bname' => $bname);
        $this->load->view('user_albums', $userArr);
    }
    function albumView(){
        $albums = $this->albumModel->getAllAlbums();
        $albumArr = array('albumarr' => $this->makeArray($albums));
        $this->load->view('albums_view', $albumArr);
    }
    function makeArray($data)
    {
        $newarr = array();
        foreach($data as $obj){
            $array = json_decode(json_encode($obj), true);

            $id = (int)$array['albumid'];
            $year = $array['year'];
            $title = $array['title'];
            $image = $array['image'];
            $bname = $array['bname'];
            $user = $array['userid'];

            $newdata = array(
                'id' => $id,
                'year' => $year,
                'title' => $title,
                'image' => $image,
                'bname' => $bname,
                'userid' => $user
            );
            array_push($newarr, $newdata);
        }
        return $newarr;
    }
    function addAlbum(){
        $config['upload_path'] = FCPATH.'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_width'] = '800';
        $config['max_height'] = '800';
        $file_name = time();
        $config['file_name'] = $file_name;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')){
            $message = $this->upload->display_errors();
            echo "<script type='text/javascript'>alert('$message')</script>";
        }else{
            $result  = $this->upload->data();
            $data = array(
                'userid' => $this->session->userdata('userid'),
                'bname'  => $this->input->post('bname'),
                'year'  => $this->input->post('year'),
                'title' => $this->input->post('title'),
                'image' => $result['file_name']
            );
            $this->db->insert('albums', $data);

        }
        redirect('AlbumCRUD/index');
    }
    function deleteAlbum($id, $image){
        $this->db->where('albumid', $id);
        $this->db->delete('albums');
        unlink(FCPATH.'uploads/'.$image);
        redirect('AlbumCRUD/index');
    }
    function updateAlbum($id){

        $data = array(
            'userid' => $this->session->userdata('userid'),
            'bname' => $this->input->post('bname'),
            'year' => $this->input->post('year'),
            'title' => $this->input->post('title'),
        );
        $this->db->where('albumid', $id);
        $this->db->update('albums', $data);
        redirect('AlbumCRUD/index');
    }
    function getCurrentAlbum($id){
        $sql = "select * from albums where albumid =". $id;
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }
    function requestAlbumUpdate($id){
        $data = $this->getCurrentAlbum($id);
        $array = json_decode(json_encode($data), true);
        $userD = $this->albumModel->getAlbum();
        $this->load->view('albumUpdate_view',array('albumdata' => $array, 'superarr' => $this->makeArray($userD)));
    }

}
