<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'user_model');
        $this->load->model('Post/Post_model', 'post_model');
        $this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('user_view');
    }

    public function register()
    {
        $this->load->view('signup');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function edit()
    {
        $user_id = $this->session->userdata('user_id');

        if (!$user_id) {
            redirect('user/login');
        }

        $data['user'] = $this->user_model->get_user_by_id($user_id);
        $this->load->view('edit_profile_view', $data);
    }

    public function signup()
    {
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password2 = $this->input->post('password2');
        $profile_photo = "default.png";
        $data = array(
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'profile_photo' => $profile_photo
        );
        $same_username = $this->user_model->username_exist($username);
        $same_email = $this->user_model->email_exist($email);
        if ($same_username) {
            $data['error'] = 'Username already exists.';
            $this->load->view('signup', $data);
        } else if ($same_email) {
            $data['error'] = 'Email already exists.';
        } elseif ($password != $password2) {
            $data['error'] = 'Passwords do not match.';
            $this->load->view('signup', $data);
        } else {
            $this->user_model->register_user($data);
            redirect('login');
        }
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->user_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $user->id);
            redirect('post');
        } else {
            $data['error'] = 'Invalid email or password';
            $this->load->view('login', $data);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        redirect('login');
    }

    public function profile()
    {
        $user_id = $this->session->userdata('user_id');
        $other_user_id = $this->uri->segment(2);
        $other_user = $this->user_model->get_user_by_id($other_user_id);
        $user = $this->user_model->get_user_by_id($user_id);
        $user_posts = $this->post_model->get_post_by_id($other_user_id);
        $data['user'] = $user;
        $data['other_user'] = $other_user;
        $data['user_posts'] = $user_posts;
        // echo "<pre>"; 
        // print_r($data); die;
        $this->load->view('profile_view', $data);
    }

    public function update_user()
    {
        $user_id = $this->session->userdata('user_id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mob = $this->input->post('mob_no');
        $city = $this->input->post('city');
        $state = $this->input->post('state');

        $file_name = $_FILES['u_photo']['name'];
        $file_size = $_FILES['u_photo']['size'];
        $file_tmp = $_FILES['u_photo']['tmp_name'];
        $allow = array("jpg", "jpeg", "gif", "png");
        $folder = 'assets/images/profile_pictures/';

        move_uploaded_file($file_tmp, $folder . $file_name);

        // if ( !!$_FILES['u_photo']['tmp_name'] ) // is the file uploaded yet?
        // {
        //     $info = explode('.', strtolower( $_FILES['u_photo']['name']) ); // whats the extension of the file

        //     if ( in_array( end($info), $allow) ) // is this file allowed
        //     {
        //         if ( move_uploaded_file( $_FILES['u_photo']['tmp_name'], $folder . basename($_FILE['u_photo']['name'] ) ) )
        //         {
        //           echo "the file has been moved correctly";
        //         }
        //     }
        //     else
        //     {
        //        echo "error this file ext is not allowed";
        //     }
        // }
        $data = array(
            'name' => $name,
            'email' => $email,
            'mob_no' => $mob,
            'city' => $city,
            'state' => $state,
            'profile_photo' => $file_name
        );
        $this->user_model->update_user($user_id, $data);
        redirect('profile/' . $user_id);
    }
}
