<?php

namespace DB;

class DBConnect {
    static $db;
    public function __construct() {
        $connection=new \mysqli(HOST,USER,'',DBASE,PORT);
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
        self::$db=$connection;
    }

    public static function instance() {
        return self::$db;
    }
}
?>