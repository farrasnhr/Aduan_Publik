<?php
class Aduan_model
{
    private $table_kategori = 'kategori_aduan';
    private $table_klasifikasi = 'klasifikasi_aduan';
    private $table_instansi = 'instansi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getInputKategoriData()
    {
        $this->db->query('SELECT id_kategori, kategori FROM ' . $this->table_kategori);
        return $this->db->resultSet();
    }

    public function getInputKlasifikasiData()
    {
        $this->db->query('SELECT * FROM ' . $this->table_klasifikasi);
        return $this->db->resultSet();
    }

    public function getInputInstansiData()
    {
        $this->db->query('SELECT id_instansi, instansi FROM ' . $this->table_instansi);
        return $this->db->resultSet();
    }
}
