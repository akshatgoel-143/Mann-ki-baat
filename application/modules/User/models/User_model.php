<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function username_exist($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        return $query->num_rows() > 0 ? true : false;
    }

    public function email_exist($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->num_rows() > 0 ? true : false;
    }

    public function register_user($data)
    {
        $this->db->insert('users', $data);
    }

    public function get_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('users');   

        return $query->num_rows() > 0 ? $query->row() : false;
    }

    public function get_all_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_user_by_id($user_id)
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->num_rows() > 0 ? $query->row_array() : false;
    }

    public function update_user($user_id,$data)
    {
        $this->db->where('id', $user_id);
        $this->db->update('users', $data);
    }

    public function get_username($user_id)
    {
        // $this->db->where('id', $user_id);
        $sql = "SELECT name FROM `users` where id = $user_id";
        $query = $this->db->query($sql);
        return $query->row()->name;
    }
}