<?php
class Admin_model
{
    private $table = 'admins';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admins.email=:email');
        $this->db->bind('email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
}
