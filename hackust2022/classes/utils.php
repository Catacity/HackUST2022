<?php

class Utils {
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

    public function getLastPostIdAndAuthorId($database) {
        $postIdAndAuthorId = array();
        $query = "SELECT TOP 1 * FROM bibliohk.posts ORDER BY date DESC;";
        $result = $database.read($query);
        $postAndAuthorUrl["postid"] = $result['postid'];
        $postAndAuthorUrl["userid"] = $result['userid'];
        return $postIdAndAuthorId;
    }
}

$utils = new Utils();

?>