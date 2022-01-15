<?php
class DaftarAduan_model
{
    private $table = 'aduan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAduanPublik()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE status_rahasia=0');
        return $this->db->resultSet();
    }

    public function getAduanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_aduan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
