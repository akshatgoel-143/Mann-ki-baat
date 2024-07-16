<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_model extends CI_Model
{

    public function get_posts()
    {
        // $query = $this->db->get('posts');
        $query = $this->db->order_by('RAND()')->get('posts');
        return $query->result_array();
    }

    public function get_post_by_id($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('posts');
        return $query->result_array();
    }

    public function get_post_by_post_id($post_id)
    {
        $this->db->where('id', $post_id);
        $query = $this->db->get('posts');
        return $query->row_array();
    }

    public function update_post($post_id, $data)
    {
        $this->db->where('id', $post_id);
        $this->db->update('posts', $data);
    }

    public function delete_post($post_id)
    {
        $this->db->where('id', $post_id);
        $this->db->delete('posts');
    }
}
