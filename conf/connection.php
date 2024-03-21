<?php

class Connection {

    function __construct() {
        $db = new mysqli('localhost', 'root', '', 'posiciones');

        if ($db->connect_error) {
            die('Connection failed: ' . $db->connect_error);
        }

        return $db;
    }
}
