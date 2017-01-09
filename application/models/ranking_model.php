<?php
class Ranking_Model extends CI_Model{
     function __construct() {
        parent::__construct();
    }
    public function getYear(){
        $this->db->distinct();
        $this->db->select('year');
        $query = $this->db->get('ranking');
        return $query->result_array();   
    }
    function getRankingDataByRegional($regional_id = 1){
        $this->db->select('*');
        $mua_giai = $this->input->post('mua_giai');
        $this->db->join('regional_ranking rg','rk.regional_id = rg.regional_id');
        $this->db->where('rk.regional_id',$regional_id);
        $this->db->where('rk.year',$mua_giai);
        $this->db->order_by('points','desc');
        $query = $this->db->get('ranking rk');
        return $query->result_array();
    }
    
    //get dữ liệu của bảng regional_ranking
    function getRegional(){
        $this->db->select('regional_id,regional_name');
        $query = $this->db->get('regional_ranking');
        return $query->result_array();
    }
    
    //get dữ liệu của bảng regional_ranking theo id
    function getRegionalById($id){
        $this->db->where('regional_id',$id);
        return $this->db->get('regional_ranking')->row();
    }
    //get du lieu theo ten va thoi gian- vi tri tren bang xep hang tai thoi diem do
    function getRankingDataByName($team_name, $year){
        $this->db->select('*');
        $this->db->where('team',$team_name);
        $this->db->where('year',$year);
        $query = $this->db->get('ranking');
        return $query->result_array();
    }
    function getTeam(){
        $this->db->distinct();
        $this->db->select('*');
        $query = $this->db->get('ranking');
        return $query->result_array();  
    }
}
