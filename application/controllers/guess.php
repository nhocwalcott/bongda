<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Guess extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('articles_model');
        $this->load->model('videos_model');
        $this->load->model('categories_model');
        $this->load->model('guess_model');
    }
    public function displayMatch(){

    }

}