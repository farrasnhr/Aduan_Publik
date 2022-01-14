<?php
class User_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllAduanPublic($data) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status_rahasia = 0');
        return $this->db->resultSet();
    }
}