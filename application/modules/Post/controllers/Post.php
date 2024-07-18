<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller 
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
        $user = $this->user_model->get_user_by_id($user_id);
        $all_users = $this->user_model->get_all_users();
        $data['posts'] = $this->post_model->get_posts();
        $data['user'] = $user;
        $data['all_user'] = $all_users;

        $this->load->view('home_view', $data);
    }

    public function create()
    {
        $user_id = $this->session->userdata('user_id');
        $user = $this->user_model->get_user_by_id($user_id);
        $data['user'] = $user;
        $this->load->view('create_post_view',$data);
    }

    public function create_post()
    {
        $user_id = $this->session->userdata('user_id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');

        $file_name = $_FILES['post']['name'];
        $file_size = $_FILES['post']['size'];
        $file_tmp = $_FILES['post']['tmp_name'];
        $allow = array("jpg", "jpeg", "gif", "png");
        $folder = 'assets/images/posts/';

        move_uploaded_file($file_tmp, $folder . $file_name);

        $data = array(
            'user_id' => $user_id,
            'title' => $title,
            'content' => $content,
            'image' => $file_name
        );
        $this->db->insert('posts', $data);
        redirect('profile/'.$user_id);
    }

    public function edit_post()
    {
        $user_id = $this->session->userdata('user_id');
        $user = $this->user_model->get_user_by_id($user_id);
        $data['user'] = $user;

        $post_id = $this->uri->segment(2);
        $post = $this->post_model->get_post_by_post_id($post_id);
        $data['post'] = $post;
        $this->load->view('edit_post_view', $data);
    }

    public function update_post()
    {
        $user_id = $this->session->userdata('user_id');
        $title = $this->input->post('title');
        $content = $this->input->post('content');
        $post_id = $this->uri->segment(3);
        $data = array(
            'title' => $title,
            'content' => $content
        );
        $this->post_model->update_post($post_id,$data);
        redirect('profile/'.$user_id);
    }

    public function delete_post()
    {
        $user_id = $this->session->userdata('user_id');
        $post_id = $this->uri->segment(2);
        $this->post_model->delete_post($post_id);
        redirect('profile/'.$user_id);
    }
    
}