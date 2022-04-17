<?php
    require('db.php');

    class Query extends db {
        
        public function add($table_name, $data){
            
            $fields = implode(",", array_keys($data));
            $values = implode("','", array_values($data));
            
            echo $query = "INSERT INTO ".$table_name."(" . $fields . ") VALUES ('" . $values . "')";
            
            return $this->db->query($query);
        }
    }