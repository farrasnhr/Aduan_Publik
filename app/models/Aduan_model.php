<?php
class Aduan_model
{
    private $table_kategori = 'kategori_aduan';
    private $table_klasifikasi = 'klasifikasi_aduan';
    private $table_instansi = 'instansi';
    private $table = 'aduan';
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

    public function addAduanData($data)
    {
        $query = "INSERT INTO aduan VALUES ('', :judul, :isi, :tanggal_aduan, :lokasi, :status_anonim, :status_rahasia, 'Menunggu', :id_user, :id_kategori, :id_instansi, :id_klasifikasi)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('tanggal_aduan', $data['tanggal_aduan']);
        $this->db->bind('lokasi', $data['lokasi']);
        $this->db->bind('status_anonim', $data['status_anonim']);
        $this->db->bind('status_rahasia', $data['status_rahasia']);
        // $this->db->bind('status_aduan', $data['status_aduan']);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('id_instansi', $data['id_instansi']);
        $this->db->bind('id_klasifikasi', $data['id_klasifikasi']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
