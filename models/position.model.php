<?php

require_once 'conf/connection.php';

class Positions {

    private $db;

    public function __construct() {
        $this->db = new Connection();
    }

    public function add($data) {
        $stmt = $this->db->prepare('INSERT INTO positions (name) VALUES (?)');
        $stmt->bind_param('s', $data['name']);
        $stmt->execute();
    }

    public function edit($data) {
        $stmt = $this->db->prepare('UPDATE positions SET name = ? WHERE id = ?');
        $stmt->bind_param('si', $data['name'], $data['id']);
        $stmt->execute();
    }

    public function delete($data) {
        $stmt = $this->db->prepare('DELETE FROM positions WHERE id = ?');
        $stmt->bind_param('i', $data['id']);
        $stmt->execute();

    }

}
