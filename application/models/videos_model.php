<?php

class Videos_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function addVideo($link, $image = null) {
        $title = htmlentities($this->input->post('title'));
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'title' => $title,
            'description' => htmlentities($this->input->post('description')),
            'link' => $link,
            'image' => $image,
            'alias' => url_title($title, '-', true).uniqid(rand(), true),
            'post_on' => date('Y-m-d G:i:s', strtotime('now'))
        );
        return $this->db->insert('videos', $data);
    }

    // đếm số lượng bài viết
    public function countVideos() {
        return $this->db->count_all_results('videos');
    }

    // lấy các bài viết
    public function getListVideos($limit = 5, $offset = 0) {
        $this->db->select('title, description, image, alias, username, post_on');
        $this->db->join('users', 'users.user_id = videos.user_id');
        $this->db->limit($limit, $offset);
        $this->db->order_by("video_id", "desc");
        $query = $this->db->get('videos');
        return $query->result();
    }

    public function getVideoByAlias($alias) {
        $this->db->select('video_id, title,u.user_id,username,description,post_on,link');
        $this->db->join('users u', 'u.user_id = v.user_id');
        $this->db->where('v.alias', $alias);
        $query = $this->db->get('videos v');
        return $query->result_array();
    }
    
    public function getVideosForSideBar($limit = 6) {
        $this->db->select('title, alias');
        $this->db->limit($limit);
        $this->db->order_by("video_id", "random");
        $query = $this->db->get('videos');
        return $query->result();
    }

    public function getVideos($limit = 5) {
        $this->db->select('title, alias');
        $this->db->limit($limit);
        $this->db->order_by("video_id", "random");
        $query = $this->db->get('videos');
        return $query->result();
    }
    public function delete_video($alias) {
        $this->db->where('alias', $alias);
        return $this->db->delete('videos');
    }

}
