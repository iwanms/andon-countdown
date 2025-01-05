<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->model('M_Call', 'model');
	}

    function index(){
        $this->load->view("call/index");
    }

    function callPage(){
        $num = $this->input->post("num");
        $this->model->save($num);
        $jmlCall = $this->model->checkCall();

        $totalCall = $jmlCall;

        $data = array (
			"totalCall" => $totalCall
		);

		header('Content-Type: application/json');
		echo json_encode($data);
    }
}