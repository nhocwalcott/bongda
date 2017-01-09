<?php

class Comments_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // lấy danh sách các comments
    // output: posted_at
    public function getComments($posted_at) {
        $this->db->select('username, content, posted_on');
        $this->db->from('comments')->where('posted_at', $posted_at);
        $this->db->join('users', 'comments.user_id = users.user_id');
        return $this->db->get()->result();
    }
    
    public function countComments($posted_at) {
        $this->db->from('comments')->where('posted_at', $posted_at);
        return $this->db->count_all_results();
    }
    
    public function addComment($posted_at) {
        $title = $this->input->post('title');
        echo 'zmt'.$this->input->post('comment').'zzz';
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'posted_at' => $posted_at,
            'content' => $this->input->post('comment'),
            'posted_on' => date('Y-m-d G:i:s', strtotime('now'))
        );
        return $this->db->insert('comments', $data);
    }
    
}