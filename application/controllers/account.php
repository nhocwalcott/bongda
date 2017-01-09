<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

    public function login() {
        $this->load->helper('form');
        $this->load->model('articles_model');
        $data['popular_news'] = $this->articles_model->getListArticles(16,0);
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            
            // các luật
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            if ($this->form_validation->run() === true) {
                // nhập form thành công
                $this->load->model('users_model');
                if ($this->users_model->checkUserExist() == true) {
                    $user = $this->users_model->getUser();
                    if ($user === null) {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">Mật khẩu không hợp lệ!</div>');
                    } else {
                        $this->session->set_userdata($user);
                        if(check_admin()){
                            redirect(base_url('admin'));
                        }else{
                            redirect(base_url());
                        }

                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Tài khoản không tồn tại!</div>');
                }
            }
        }
        $data['title'] = 'Login';
        $this->load->view('frontend/auth/login', $data);
    }

    public function signup() {
        $this->load->helper('form');
        $this->load->model('articles_model');
        $data['popular_news'] = $this->articles_model->getListArticles(16,0);
        if ($this->input->post('submit')) {
            $this->load->library('form_validation');
            
            // các luật
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
            $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]|xss_clean|max_length[30]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]|max_length[30]');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
            
            if ($this->form_validation->run() === true) {
                // nhập form thành công
                $this->load->model('users_model');
                $this->users_model->addUser();
                $data['title'] = 'Đăng ký thành công';
                $this->load->view('frontend/auth/signup_success', $data);
                return;
            }
        }
        $data['title'] = 'Sign Up';
        $this->load->view('frontend/auth/signup', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}
