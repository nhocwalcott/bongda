<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('check_login'))
{
    function check_login()
    {
        $CI =& get_instance();
        if ($CI->session->userdata('user_id') != null) {
            return true;
        } else {
            return false;
        }
    }
}

if ( ! function_exists('check_admin'))
{
    function check_admin()
    {
        $CI =& get_instance();
        $user_level = $CI->session->userdata('user_level');
        if ($user_level != null && $user_level == 1) {
            return true;
        } else {
            return false;
        }
    }
}
if ( ! function_exists('check_TicketManager'))
{
    function check_TicketManager()
    {
        $CI =& get_instance();
        $user_level = $CI->session->userdata('user_level');
        if ($user_level != null && $user_level == 2) {
            return true;
        } else {
            return false;
        }
    }
}
if ( ! function_exists('check_ArticleManager'))
{
    function check_ArticleManager()
    {
        $CI =& get_instance();
        $user_level = $CI->session->userdata('user_level');
        if ($user_level != null && $user_level == 3) {
            return true;
        } else {
            return false;
        }
    }
}
if ( ! function_exists('config_paginator') )
{
    function config_paginator($uri = '', $total_rows = 10, $per_page = 5)
    {
        $CI =& get_instance();
        $CI->load->library('pagination');
        $config['use_page_numbers'] = TRUE;
        $config['uri_segment'] = 3;
        
        $config['base_url'] = base_url($uri);
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        
        // Adding Enclosing Markup
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        
        // Customizing the First Link
        $config['first_link'] = '&laquo;';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        
        // Customizing the Last Link
        $config['last_link'] = '&raquo;';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        // Customizing the "Next" Link
        $config['next_link'] = '&rsaquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        
        // Customizing the "Previous" Link
        $config['prev_link'] = '&lsaquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        // Customizing the "Digit" Link
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        
        // Customizing the "Current Page" Link
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        
        $CI->pagination->initialize($config);
    }
}