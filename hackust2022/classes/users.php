<?php
class User{
    private $database;

    function __construct($database) {
        $this->database = $database;
    }

    public function get_data($userid){

        $query = "select * from users where userid = '$userid' limit 1";
        
        $result = $this->database->read($query);

        if ($result){
            $row = $result[0];
            return $row;
        }

        else{
            return false;
        }
    }
}