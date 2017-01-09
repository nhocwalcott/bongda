<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class TicketManager extends CI_Controller {

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
    public function delete_ticket($id) {
        if (!isset($id) || empty($id)) {
            redirect('ticketmanager/tickets_manager');
        }
        $this->load->model('tickets_model');
        if ($this->tickets_model->delete_ticket($id) == true) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">Đã xoá vé!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
        }
        redirect('ticketmanager/tickets_manager');
    }


    public function tickets_manager($page = 1) {
        $per_page = 5;

        $data['title'] = 'Tickets_manager';
        $this->load->model('tickets_model');
        $mount = 10;
        config_paginator('ticketmanager/tickets_manager',$mount,$per_page);

        $data['list_tickets'] =  $this->tickets_model->getTicket($per_page, ($page - 1) * $per_page);
        $data['nav_admin'] = 'tickets_manager';

        $this->load->view('backend/tickets/list',$data);
    }

    public function add_ticket(){
        $this->load->helper('form');
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            // các luật
            $this->form_validation->set_rules('name', 'Ten ve', 'trim|required');
            $this->form_validation->set_rules('name_url', 'Duong dan den Ve', 'trim|required');
            $this->form_validation->set_rules('img', 'Anh', 'trim|required');
            $this->form_validation->set_rules('title',"Title: ", 'trim|required');
            $this->form_validation->set_rules('content', 'Nội dung', 'trim|required');
            $this->form_validation->set_rules('price',"Gia",'trim|required');

            // kiểm tra các luật
            if ($this->form_validation->run() === true) {
                // Thông báo thành công
                $this->load->model('tickets_model');
                if ($this->tickets_model->addTicket() == true) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success">Thêm ve mới thành công!</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
                }
                redirect(current_url());
            }
        }

        // lấy dữ liệu cho dropdown
        $this->load->model('tickets_model');
        $data['dropdownlist'] = $this->tickets_model->getTicket();

        $data['title'] = 'Add a new Ticket';
        $data['nav_admin'] = 'add_ticket';

        $this->load->view('backend/tickets/add',$data);

    }
    public function edit_ticket($id=""){


        $this->load->model('tickets_model');
        $this->load->helper('form');
        if ($this->input->post()) {

            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            // các luật
            $this->form_validation->set_rules('name', 'Ten ve', 'trim|required');
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('price', 'Price', 'trim|required');
            $this->form_validation->set_rules('img', 'Image', 'trim|required');

            // kiểm tra các luật

            if ($this->form_validation->run() === true) {
                // Thông báo thành công

                $this->load->model('tickets_model');
                if ($this->tickets_model->updateTicket($id) == true) {

                    $this->session->set_flashdata('message', '<div class="alert alert-success">Sửa vé thành công!</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
                }
                redirect('ticketmanager/tickets_manager');
            }
        }

        // lấy dữ liệu cho form
        $this->load->model('tickets_model');
        $data['ticket'] = $this->tickets_model->getTicketForAdmin($id);
        $data['id'] = $id;
        // lấy dữ liệu cho dropdown
        $this->load->model('tickets_model');
        $data['dropdownlist'] = $this->tickets_model->getTicket();

        $data['title'] = 'Edit Ticket';
        $data['nav_admin'] = 'tickets_manager';

        $this->load->view('backend/tickets/edit',$data);
    }
    public function deal_manager($page = 1){
        $per_page = 10;      // số bài viết trên một trang
        $this->load->model('tickets_model');
        $mount = $this->tickets_model->countorder();
        // cấu hình phân trang
        config_paginator('view/all_orders', $mount, $per_page);
        $data['list_order'] = $this->tickets_model->getListOrder($per_page, ($page - 1) * $per_page);

        $data['title'] = 'Orders Manager';
        $data['nav_admin'] = 'orders_manager';

        $this->load->view('backend/tickets/deal',$data);
    }
    public function delete_deal($id) {
        if (!isset($id) || empty($id)) {
            redirect('ticketmanager/deal_manager');
        }
        $this->load->model('tickets_model');
        if ($this->tickets_model->delete_deal($id) == true) {

            $this->session->set_flashdata('message', '<div class="alert alert-success">Đã xoá hóa đơn thành công!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Đã có lỗi xảy ra!</div>');
        }
        redirect('ticketmanager/deal_manager');
    }
}
