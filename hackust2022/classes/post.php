<?php

class post{
    private $error = "";
    # Public by default anyway
    public function validate($data){
        foreach ($data as $key => $value){
            if (empty($value)){
                $this->error = $this->error . $key . " is empty!<br>"; # . concat to the end of the string
            } 
        }

        if ($this->error == ""){
            $this->create_post($data);
        }
        else{
            return $this->error;
        }

    }

    public function create_post($data){
        $userid = $data['userid'];
        $category = $data['category'];
        $title= $data['title'];
        $content = $data['content']; //insert into database

        if ($category != "chatroom"){
            $Q1question = $data['Q1question'];
            $Q1Option1 = $data['Q1Option1'];
            $Q1Option2 = $data['Q1Option2'];
            $Q1Option3 = $data['Q1Option3'];
            $Q1Option4 = $data['Q1Option4'];

            $Q2question = $data['Q2question'];
            $Q2Option1 = $data['Q2Option1'];
            $Q2Option2 = $data['Q2Option2'];
            $Q2Option3 = $data['Q2Option3'];
            $Q2Option4 = $data['Q2Option4'];

            $Q3question = $data['Q3question'];
            $Q3Option1 = $data['Q3Option1'];
            $Q3Option2 = $data['Q3Option2'];
            $Q3Option3 = $data['Q3Option3'];
            $Q3Option4 = $data['Q3Option4'];

            $Q4question = $data['Q4question'];
            $Q4Option1 = $data['Q3Option1'];
            $Q4Option2 = $data['Q3Option2'];
            $Q4Option3 = $data['Q3Option3'];
            $Q4Option4 = $data['Q3Option4'];
        }
        
        $DB = new database();
        if ($category != "chatroom"){
            $query= "insert into posts (userid,category,title,content,Q1question,Q1Option1,Q1Option2,Q1Option3,Q1Option4,Q2question,Q2Option1,Q2Option2,Q2Option3,Q2Option4,Q3question,Q3Option1,Q3Option2,Q3Option3,Q3Option4,Q4question,Q4Option1,Q4Option2,Q4Option3,Q4Option4) values ('$userid','$category','$title','$content','$Q1question','$Q1Option1','$Q1Option2','$Q1Option3','$Q1Option4','$Q2question','$Q2Option1','$Q2Option2','$Q2Option3','$Q2Option4','$Q3question','$Q3Option1','$Q3Option2','$Q3Option3','$Q3Option4','$Q4question','$Q4Option1','$Q4Option2','$Q4Option3','$Q4Option4')";
        }
        else{
            $query= "insert into posts (userid,category,title,content) values ('$userid','$category','$title','$content','$Q1question')";
        }

        $DB->write($query);
    }
}
