<?php

class category{
    private $database;

    function __construct($database) {
        $this->database = $database;
    }

    public function get_data($category){
        $query = "select * from posts where category = '$category' ORDER BY id DESC";
        
        $result = $this->database->read($query);

        return $result;
    }
}
