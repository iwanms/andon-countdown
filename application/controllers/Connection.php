<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection extends CI_Controller {

    public function check_internet_connection() {
        $status = false;
        if ($this->is_connected()) {
            $status = true;
        } 

        $data = array("status"=>$status);
        header('Content-Type: application/json');
		echo json_encode($data);
    }

    private function is_connected() {
        $connected = @fsockopen("www.google.com", 80); // Try to open connection to Google
        if ($connected) {
            fclose($connected); // If successful, close the connection
            return true; // Internet connection available
        } else {
            return false; // No internet connection
        }
    }

}