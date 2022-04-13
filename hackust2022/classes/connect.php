<?php

class database{
    // Using MYSQL database in localhost/phpmyadmin as a proof of concept
    private $host = "localhost";
    // I have never used this prior to the hackathon
    // so the default username and password are used
    private $username = "root";
    private $password = "";
    private $db = "bibliohk";  

    function connect(){
        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connection;
    }
    
    function read($query){
        # $query = "select * from users";
        # $result = mysqli_query($connection,$readquery); # Returns an array
        $connect = $this->connect();
        $result = mysqli_query($connect,$query); 
        #print_r($result);

        if(!$result){
            return false;
        }

        else{
            $data = false;
            while ($row = mysqli_fetch_assoc($result)){
                # While $row contains data
                #echo "<pre>";
                #print_r ($row);
                #echo "</pre>";
                $data[] = $row;     # Appends $row's data to the data array
            }

            #print_r($data);
            return $data;


        }

    }
    
    function write($query){
        /*
        $username = "test_user";
        $qualifications = "University Year 2";
        $writequery = "insert into users (username,qualifications) values ('$username','$qualifications')";
        */

        #$readquery = "select * from users";

        $connect = $this->connect();
        $result = mysqli_query($connect,$query);   
    
        #echo mysqli_error($connect);
        if ($result->num_rows == 0){
            return false;
        }

        else{
            return $result;
        }
    }
}