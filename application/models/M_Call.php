<?php

    class M_Call extends CI_Model {

        function save($num){
            $data = array(
                'call' => $num,
                'status' => 1
            );

            return $this->db->insert('call', $data);
        }

        function checkCall(){
            $this->db->where('status', 1);
            return $this->db->count_all_results('call');
        }

    }