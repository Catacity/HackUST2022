<?php

class category{

    public function get_data($category){
        $query = "select * from posts where category = '$category' ORDER BY id DESC";
        
        $DB = new database();
        $result = $DB->read($query);

        return $result;
    }
}
