<?php

include_once("classes/connect.php");

class Utils {
    private $database;
    
    function __construct($database) {
        $this->database = $database;
    }

    public static function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public static function getCurrentUrl() {
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public function getLastPostIdAndAuthorId($category = "default") {
        $query = "SELECT postid, userid FROM bibliohk.posts";
        switch ($category) {
            case "<100":
            case "<200":
            case "<300":
            case "<400":
            case "<500":
            case "<600":
            case "<700":
            case "<800":
            case "<900":
            case "<1000":
            case "<1200":
            case "<1500":
            case "<2000":
            case ">=2000":
            case "chatroom":
                $query .= " WHERE category = \"{$category}\"";
                break;
            case "bibliotheca":
                $query .= " WHERE category != \"chatroom\"";
                // exclude chatroom
                break;
            case "bookmark":
                // exclude chatroom
                // top 10 bookmark
                $query .= " WHERE category != \"chatroom\" AND postid IN (
                    SELECT postid FROM bibliohk.postuserinfo
                    WHERE bookmarked = 1
                    GROUP BY postid
                    ORDER BY COUNT(userid) DESC LIMIT 10)";
                break;
            default:
                break;
        }
        $query .= " ORDER BY date DESC LIMIT 1;";
        $result = $this->database->read($query);

        #echo $query;
        #echo $result;
        #print_r($result);
        if ($result) {
            $postIdAndAuthorId = array();
            $postIdAndAuthorId["postid"] = $result[0]['postid'];
            $postIdAndAuthorId["userid"] = $result[0]['userid'];
            #print_r($postAndAuthorUrl);
            return $postIdAndAuthorId;
        }
        else {
            // No post is found (probably because of no enough posts)
            return false;
        }
    }

    public function checkIsAuthor($postId, $userId) {
        $query = "SELECT userid from bibliohk.posts WHERE postid = {$postId};";
        $result = $this->database->read($query);
        if ($result) {
            return ($userId == $result[0]["userid"]);
        }
        else {
            // No such post with given postid
            return false;
        }
    }

    public function postIsAnsweredByUser($postid, $userid) {
        if ($this->checkIsAuthor($postid, $userid)) {
            return true;
        }
        $query = "SELECT Q1Ans, Q2Ans, Q3Ans, Q4Ans FROM bibliohk.postuserinfo 
            WHERE postid = \"{$postid}\" AND userid = \"{$userid}\";";
        $result = $this->database->read($query);
        if ($result) {
            if ($result[0]["Q1Ans"] == null || $result[0]["Q2Ans"] == null || $result[0]["Q3Ans"] == null || $result[0]["Q4Ans"] == null) {
                return false;
            }
            else {
                return true;
            }
        }
        else {
            // No such record with given postid and userid
            return false;
        }
    }

    public function getBookmarked($postid, $userid) {
        $query = "SELECT bookmarked FROM bibliohk.postuserinfo
            WHERE postid = \"{$postid}\" AND userid = \"{$userid}\";";
        $result = $this->database->read($query);
        if ($result) {
            $bookmarked = $result[0]["bookmarked"];
            return $bookmarked;
        }
        else {
            $insertQuery = "INSERT INTO bibliohk.postuserinfo (postid, userid, bookmarked) 
                VALUES ({$postid}, {$userid}, 0);";
            $this->database->write($insertQuery);
            return 0;
        }
    }

    public function bookmark($postid, $userid) {
        $bookmarked = $this->getBookmarked($postid, $userid);
        $value = 1 - $bookmarked;
        $query = "UPDATE bibliohk.postuserinfo 
            SET bookmarked = {$value} 
            WHERE postid = \"{$postid}\" AND userid = \"{$userid}\";";
        $this->database->write($query);
    }

    public function getComments($postid) {
        $query = "SELECT * FROM bibliohk.comments WHERE postid = \"{$postid}\";";
        $result = $this->database->read($query);
        return $result;
    }
}

$utils = new Utils($database);

?>