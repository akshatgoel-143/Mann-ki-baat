<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'post_model');
        $this->load->model('User/User_model', 'user_model');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $all_users = $this->user_model->get_all_users();
        $data['all_user'] = $all_users;

        $this->load->view('usersearch',$data);
    }   

}
