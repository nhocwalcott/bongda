<?php

class Articles_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // thêm bài viết mới
    // input: user_id, categoty_id, title, desctiption, content ; output: true | false
    public function addArticle($img = " ") {
        $title = htmlentities($this->input->post('title'));
        $data = array(
            'user_id' => $this->session->userdata('user_id'),
            'category_id' => $this->input->post('category'),
            'title' => $title,
            'img'=>$img,
            'description' => htmlentities($this->input->post('description')),
            'content' => $this->input->post('content'),
            'alias' => url_title($title, '-', true).uniqid(rand(), true),
            'post_on' => date('Y-m-d G:i:s', strtotime('now'))
        );
        return $this->db->insert('articles', $data);
    }

    // đếm số lượng bài viết
    public function countArticles() {
        return $this->db->count_all_results('articles');
    }
    
    // lấy các bài viết
    public function getListArticles($limit = 6, $offset = 0) {
        $this->db->select('*');
        $this->db->limit($limit, $offset);
        $this->db->order_by("article_id", "desc");
        $query = $this->db->get('articles');
        $result = $query->result();
        foreach($result as $key => $value) {
            $content = $result[$key]->content;
            $result[$key]->image = $this->getImageFromHtml($content);
            unset($result[$key]->content);
        }
        return $result;
    }
    
    // lấy các bài viết để chỉnh sửa
    public function getListArticlesForManager($limit = 5, $offset = 0) {
        $this->db->select('username, title, alias, post_on');
        $this->db->join('users', 'users.user_id = articles.user_id');
        $this->db->limit($limit, $offset);
        $this->db->order_by("article_id", "desc");
        $query = $this->db->get('articles');
        return $query->result();
    }
    
    public function getArticleByAlias($alias) {
        $this->db->select('article_id, title, category_id, description, content, u.user_id, alias, post_on, username');
        $this->db->join('users as u', 'u.user_id = a.user_id');
        $this->db->where('alias', $alias);
        $query = $this->db->get('articles as a');
        return $query->row();
    }
    
    public function updateArticle($alias) {
        $title = $this->input->post('title');
        $data = array(
            'category_id' => $this->input->post('category'),
            'title' => $title,
            'description' => $this->input->post('description'),
            'content' => $this->input->post('content'),
            'alias' => url_title($title, '-', true),
        );
        $this->db->where('alias',$alias)->limit(1);
        return $this->db->update('articles', $data);
    }
    
    public function delete_article($alias) {
        $this->db->where('alias', $alias);
        return $this->db->delete('articles');
    }
    
    // lấy ảnh đầu tiên chứa trong chuỗi html
    private function getImageFromHtml($html = '') {
        preg_match_all('/<img .*src=["|\']([^"|\']+)/i', $html, $matches);
        return isset($matches[1][0]) ? $matches[1][0] : null;
    }
    
    public function getArticlesForSideBar($limit = 5) {
        $this->db->select('title, alias');
        $this->db->limit($limit);
        $this->db->order_by("article_id", "random");
        $query = $this->db->get('articles');
        return $query->result();
    }

    public function getArticleCategory($id){
        $this->db->select('title, description, img, alias, post_on');
        $this->db->where('category_id', $id);
        $this->db->order_by("article_id", "desc");
        $query = $this->db->get('articles');
        return $query->result();
    }

}
