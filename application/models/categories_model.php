<?php

class Categories_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // lấy danh sách các categories
    // output: array(id => name)
    public function getListCategories() {
        $query = $this->db->get('categories')->result();
        $list = array();
        foreach($query as $row) {
            $list += array($row->category_id => $row->name);
        }
        return $list;
    }

    public function getCategories() {
        $query = $this->db->get('categories');
        $result = $query->result();
        return $result;
    }


}