<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ArticleManager extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('users_model');
        $this->load->model('articles_model');
//        if (check_admin() == false) {
//            redirect(base_url());
//        }
    }

    public function index(){
        $data['count_users'] = $this->users_model->countUsers();
        $data['count_articles'] = $this->articles_model->countArticles();
        $this->load->view('backend/index', $data);
    }


    // thêm bài viết mới
    public function add_article() {
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            // các luật
            $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
            $this->form_validation->set_rules('category', 'Phân loại', 'trim|required');
            $this->form_validation->set_rules('description', 'Mô tả', 'trim|required');
            $this->form_validation->set_rules('content', 'Nội dung', 'trim|required');

            // kiểm tra các luật
            if ($this->form_validation->run() === true) {
                // Thông báo thành công
                $this->load->model('articles_model');
                $upload_dir = './asserts/images';
                if (is_dir($upload_dir) && is_writable($upload_dir)) {  // kiểm tra thư mục
                    // xử lý tên file
                    $name = explode('.', $_FILES['image']['name']);     // tách tên theo ký tự dot
                    $ext = strtolower(end($name));                      // lấy phần mở rộng trong tên
                    // array_pop($name);                                   // bỏ phần đuôi trong tên
                    // $name = implode("_", $name);                        // gộp lại các phần của tên bằng dấu underscore
                    $name = url_title($name, '_', true);                // chuẩn hoá tên
                    // chuyển file về thư mục $assert_dir
                    $image_file = $upload_dir . $name . '.' . $ext;
                    move_uploaded_file($_FILES['image']['tmp_name'], $image_file);
                    $this->load->model('videos_model');
                    $img = substr($image_file, 2);                 // loại bỏ 2 ký tự đầu tiên './'
                    $this->videos_model->addArticle($img);
                }
                if ($this->articles_model->addArticle($img) == true) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Thêm bài viết mới thành công!</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
                }
                redirect(current_url());
            }
        }

        // lấy dữ liệu cho dropdown
        $this->load->model('categories_model');
        $data['dropdownlist'] = $this->categories_model->getListCategories();

        $data['title'] = 'Add a new article';
        $data['nav_admin'] = 'add_article';

        $this->load->view('backend/article/add', $data);
//        $this->load->view('backend/templates/footer', $data);
    }

    // thêm video mới
    public function add_video() {
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            // các luật
            $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
            $this->form_validation->set_rules('description', 'Mô tả', 'trim|required');

            // kiểm tra các luật
            if ($this->form_validation->run() === true) {

                $upload_dir = './uploads/videos/';
                if (is_dir($upload_dir) && is_writable($upload_dir)) {  // kiểm tra thư mục
                    // xử lý tên file
                    $name = explode('.', $_FILES['video']['name']);     // tách tên theo ký tự dot
                    $ext = strtolower(end($name));                      // lấy phần mở rộng trong tên
                    array_pop($name);                                   // bỏ phần đuôi trong tên
                    $name = implode("_", $name);                        // gộp lại các phần của tên bằng dấu underscore
                    $name = url_title($name, '_', true);                // chuẩn hoá tên
                    // chuyển file về thư mục $upload_dir
                    $video_file = $upload_dir . $name . '.' . $ext;
                    move_uploaded_file($_FILES['video']['tmp_name'], $video_file);

                    // lưu ảnh thumbnail
                    $ffmpeg = 'assets\\ffmpeg\\ffmpeg';
                    $image_file = $upload_dir . $name . '.' . 'jpg';
                    $second = 5;
                    $cmd = "$ffmpeg -itsoffset -$second -i $video_file -vcodec mjpeg -vframes 1 -an -f rawvideo $image_file";
                    exec($cmd);

                    // insert vào database
                    $this->load->model('videos_model');
                    $link = substr($video_file, 2);                 // loại bỏ 2 ký tự đầu tiên './'
                    $image = substr($image_file, 2);
                    if ($this->videos_model->addVideo($link, $image) == true) {
                        $this->session->set_flashdata('message', '<div class="alert alert-success">Thêm video mới thành công!</div>');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Thư mục upload không tồn tại hoặc không có quyền ghi!</div>');
                }
                redirect(current_url());
            }
        }

        $data['title'] = 'Add a new video';
        $data['nav_admin'] = 'add_video';

        $this->load->view('backend/videos/add', $data);
//        $this->load->view('template/footer', $data);
    }

    public function articles_manager($page = 1) {
        $per_page = 10;
        $this->load->model('articles_model');
        $mount = $this->articles_model->countArticles();
        config_paginator('articlemanager/articles_manager', $mount, $per_page);
        $data['list_articles'] = $this->articles_model->getListArticlesForManager($per_page, ($page - 1) * $per_page);

        $data['title'] = 'Articles Manager';
        $data['nav_admin'] = 'articles_manager';

        $this->load->view('backend/article/list',$data);
    }

    public function edit_article($alias = '') {
        if (!isset($alias) || empty($alias)) {
            redirect('articlemanager/articles_manager');
        }
        $this->load->model('articles_model');
        $data['article'] = $this->articles_model->getArticleByAlias($alias);

        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            // các luật
            $this->form_validation->set_rules('title', 'Tiêu đề', 'trim|required');
            $this->form_validation->set_rules('category', 'Phân loại', 'trim|required');
            $this->form_validation->set_rules('description', 'Mô tả', 'trim|required');
            $this->form_validation->set_rules('content', 'Nội dung', 'trim|required');

            // kiểm tra các luật
            if ($this->form_validation->run() === true) {
                // Thông báo thành công
                $this->load->model('articles_model');
                if ($this->articles_model->updateArticle($alias) == true) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Sửa bài viết mới thành công!</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
                }
                redirect('articlemanager/articles_manager');
            }
        }

        // lấy dữ liệu cho form
        $this->load->model('articles_model');
        $data['article'] = $this->articles_model->getArticleByAlias($alias);

        // lấy dữ liệu cho dropdown
        $this->load->model('categories_model');
        $data['dropdownlist'] = $this->categories_model->getListCategories();

        $data['title'] = 'Edit Article';
        $data['nav_admin'] = 'articles_manager';

        $this->load->view('backend/article/edit', $data);

    }

    // xoá bài viết
    public function delete_article($alias) {
        if (!isset($alias) || empty($alias)) {
            redirect('articlemanager/articles_manager');
        }
        $this->load->model('articles_model');
        if ($this->articles_model->delete_article($alias) == true) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">Đã xoá bài viết!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
        }
        redirect('articlemanager/articles_manager');
    }
    public function videos_manager($page = 1) {
        $per_page = 10;      // số bài viết trên một trang
        $this->load->model('videos_model');
        $mount = $this->videos_model->countVideos();
        // cấu hình phân trang
        config_paginator('view/all_videos', $mount, $per_page);
        $data['list_videos'] = $this->videos_model->getListVideos($per_page, ($page - 1) * $per_page);

        $data['title'] = 'Video Manager';
        $data['nav_admin'] = 'videos_manager';

        $this->load->view('backend/videos/list',$data);
    }

    // xoá bài viết
    public function delete_video($alias) {
        if (!isset($alias) || empty($alias)) {
            redirect('articlemanager/articles_manager');
        }
        $this->load->model('videos_model');
        if ($this->videos_model->delete_video($alias) == true) {

            $this->session->set_flashdata('message', '<div class="alert alert-success">Đã xoá video!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
        }
        redirect('articlemanager/articles_manager');
    }

}
