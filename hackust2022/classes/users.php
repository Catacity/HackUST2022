<?php
class User{
    public function get_data($userid){
        $query = "select * from users where userid = '$userid' limit 1";
        
        $DB = new database();
        $result = $DB->read($query);

        if ($result){
            $row = $result[0];
            return $row;
        }

        else{
            return false;
        }
    }
}