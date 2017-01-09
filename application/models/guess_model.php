<?php
class Guess_Model extends CI_Model{
 function __construct() {
        parent::__construct();
    }
    // Lich su thi dau cua 2 doi
 public function getListTeam(){
	$this->db->select('team_name');
	$query = $this->db->get('team_info');
	return $query->result_array();
	}
	public function getHistoryDataHomeTeam($team1,$team2){
		$this->db->select('*');

		$this->db->where('home_team',$team1);
		$this->db->where('away_team',$team2);
		$query = $this->db->get('history_data');
		return $query->result_array();
	}
	public function getTime($team1,$team2){
		$this->db->select('*');
		$this->db->where('home_team',$team1);
		$this->db->where('away_team',$team2);
		$query = $this->db->get('history_fetch');
		return $query->result_array();
	}
	public function getRecent($team_name,$nam){
		$this->db->select('*');
		$this->db->where('year',$nam);
		$this->db->where('team_name',$team_name);
		$query = $this->db->get('ranking_detail');
		return $query->result_array();
	}
	public function getListMatch(){
		$this->db->select('*');
		$query = $this->db->get('match');
		return $query->result_array();
	}
	public function getMatchById($match_id = 1){

		$this->db->select('*');
		$match_id = $this->input->post('trandau');
		$this->db->where('match_id', $match_id);
		$query = $this->db->get('match');
		return $query->result_array();
	}
 }

