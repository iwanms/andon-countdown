<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Production', 'm_prod');
	}

	function _template($data){
		$this->load->view("template/main",$data);
	}

	public function index()
	{
		$plan	= $_GET["plan"];
		$area	= $_GET["area"];
		$line	= $_GET["line"];

		$data["konten"] = "";
		$data["plan"] 	= $plan;
		$data["area"] 	= $area;
		$data["line"] 	= $line;
		$this->_template($data);
	}

	public function assy(){
		$numPage = $this->input->post("numPage");
		$plan = $this->input->post("plan");
		$area = $this->input->post("area");
		$line = $this->input->post("line");
		$data["production"] = $this->m_prod->getProduction($plan, $area, $line);

		$title = "";
		$view = "";

		if($numPage == 1){
			$title = "assy satu";
			$view = $this->load->view("assy/assy_satu",$data,TRUE);
		}
		if($numPage == 2){
			$title = "assy dua";
			$data["absensi"] = $this->m_prod->getAbsensi($plan, $area, $line);
			$view = $this->load->view("assy/assy_dua",$data,TRUE);
		}
		if($numPage == 3){
			$title = "assy tiga";
			$view = $this->load->view("assy/assy_tiga",$data,TRUE);
		}
		if($numPage == 4){
			$title = "assy empat";
			$view = $this->load->view("assy/assy_empat",$data,TRUE);
		}
		if($numPage == 5){
			$title = "assy lima";
			$view = $this->load->view("assy/assy_lima",$data,TRUE);
		}
		
		$data = array (
			"title" => $title,
			"view" => $view
		);

		header('Content-Type: application/json');
		echo json_encode($data);
	}

	public function stockfit(){
		$numPage = $this->input->post("numPage");
		$plan = $this->input->post("plan");
		$area = $this->input->post("area");
		$line = $this->input->post("line");
		
		$title = "";
		$view = "";

		if($numPage == 1){
			$title = "stockfit satu";
			$view = $this->load->view("stockfit/stockfit_satu","",TRUE);
		}
		if($numPage == 2){
			$title = "stockfit dua";
			$view = $this->load->view("stockfit/stockfit_dua","",TRUE);
		}
		if($numPage == 3){
			$title = "stockfit tiga";
			$view = $this->load->view("stockfit/stockfit_tiga","",TRUE);
		}
		if($numPage == 4){
			$title = "stockfit empat";
			$view = $this->load->view("stockfit/stockfit_empat","",TRUE);
		}
		if($numPage == 5){
			$title = "stockfit lima";
			$view = $this->load->view("stockfit/stockfit_lima","",TRUE);
		}
		
		$data = array (
			"title" => $title,
			"view" => $view
		);

		header('Content-Type: application/json');
		echo json_encode($data);
	}
}
