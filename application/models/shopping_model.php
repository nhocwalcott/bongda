<?php
class Shopping_model extends CI_Model {

    function __construct()
        {
            parent::__construct();
        }     
        
    function insert_thanhtoan($data)
        {
            $this->db->insert('khachhang', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;
        }
    
    function insert_order($data)
        {
            $this->db->insert('orders', $data);
            $id = $this->db->insert_id();
            return (isset($id)) ? $id : FALSE;
        }
    
    function insert_order_detail($data)
        {
            $this->db->insert('order_detail', $data);
        }                                                           
} 
?>