<?php
class Aduan_model {
    private $table = 'aduan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllAduan() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}