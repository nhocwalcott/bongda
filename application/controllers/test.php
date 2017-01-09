<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->model('articles_model');
        $this->load->model('videos_model');
    }
public function learn($team1 = "", $team2= "", $ngay ="", $thang= "",$nam = ""){
	$this->load->model('guess_model');
	$this->load->model('ranking_model');

	$team2 = array("Real Madrid","Barcelona");
	$team1 = array("Real Madrid","Barcelona");
	foreach ($team1 as $t1) {
		foreach ($team2 as $t2) {
			if(!($t1===$t2)){
				foreach ($year as $y) {
	$data['history1'] = $this->guess_model->getHistoryDataHomeTeam($t1,$t2);
	$data['history2']= $this->guess_model->getHistoryDataHomeTeam($t1,$t2);
	$data['team1_recent'] = $this->guess_model->getRecent($t1,$y);
	$data['team2_recent'] = $this->guess_model->getRecent($t2,$y);
	$data['team1_ranking'] = $this->ranking_model->getRankingDataByName($t1,$y);
	$data['team2_ranking'] = $this->ranking_model->getRankingDataByName($t2,$y);
	

$this->load->view('testview',$data);
}
				}
			}
		}
	}
	public function home(){
		$this->load->view('templates/header');
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
	}

	public function admin(){
		$this->load->view('backend/index');
	}
}
  