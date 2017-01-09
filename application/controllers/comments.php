<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Comments extends CI_Controller {

    public function read_comments($posted_at = null) {
        if ($posted_at == null) {
            return;
        }
        $this->load->model('comments_model');
        $data['comments'] = $this->comments_model->getComments($posted_at);
        $this->load->view('comments/comments', $data);
    }
    
    public function post_comment($posted_at = null) {
        if ($posted_at == null) {
            return;
        }
        echo ':p';
        if ($this->session->userdata('user_id') == null) {
            return;
        }
        $this->load->model('comments_model');
        $this->comments_model->addComment($posted_at);
    }

}
