<?php

    class M_Production extends CI_Model {

        function getProduction($plan, $area, $line){
            $sql = "select d.name plan, c.name area, b.line, a.product, a.qty from production a join line b on b.id = a.id_line join area c on c.id = b.id_area join plan d on d.id = c.id_plan where a.id_line = ".$line." and c.name = '".$area."' and d.name = UPPER('".$plan."')";
            $query = $this->db->query($sql);
            return $query->result(); 
        }

        function getAbsensi($plan, $area, $line){
            $sql = "select d.name plan, c.name area, b.line, a.name, a.qty from absensi a join line b on b.id = a.id_line join area c on c.id = b.id_area join plan d on d.id = c.id_plan where a.id_line = ".$line." and c.name = '".$area."' and d.name = UPPER('".$plan."')";
            $query = $this->db->query($sql);
            return $query->result(); 
        }

    }

?>