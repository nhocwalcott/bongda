<?php
/**
 * Created by PhpStorm.
 * User: DoNguyetAnh
 * Date: 12/17/2016
 * Time: 9:50 AM
 */
class Matchs_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function countMatch(){
        return $this->db->count_all_results('match');
    }
    public function getListMatchs($limit = 10, $offset = 0){
        $this->db->select('*');
        $this->db->limit($limit, $offset);
        $this->db->order_by("match_id", "desc");
        $query = $this->db->get('match');
        $result = $query->result_array();
        return $result;
        }

    public function addMatch(){
           $data = array(
               'match_id' => $this->input->post('match_id'),
               'match_name'=>$this->input->post('match_name'),
               'date'=>$this->input->post('date'),
               'month'=>$this->input->post('month'),
               'year'=>$this->input->post('year'),
               'team1'=>$this->input->post('team1'),
               'team2'=>$this->input->post('team2'),
               'description'=>$this->input->post('description')
           );
        $this->db->insert('match',$data);
    }
    public function getMatch($id){
            $this->db->select('*');
            $this->db->where('match_id',$id);
            $query = $this->db->get('match');
            return $query->result_array();
    }
    public function delete_match($id) {
        $this->db->where('match_id', $id);
        return $this->db->delete('match');
    }

}