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
        $this->db->query('SELECT klasifikasi_aduan.klasifikasi, aduan.status_aduan, aduan.id_aduan, aduan.judul, aduan.isi, aduan.status_anonim, users.nama, aduan.tanggal_aduan FROM ((' . $this->table .
            ' INNER JOIN klasifikasi_aduan ON klasifikasi_aduan.id_klasifikasi = aduan.id_klasifikasi) 
                            INNER JOIN users ON users.id_user = aduan.id_user) 
                            WHERE status_rahasia=0');
        return $this->db->resultSet();
    }

    public function getAduanById($id)
    {
        $this->db->query('SELECT aduan.status_aduan, aduan.judul, aduan.id_aduan, aduan.isi, aduan.lokasi, instansi.instansi, kategori_aduan.kategori, users.nama, aduan.status_anonim, aduan.tanggal_aduan FROM ((' . $this->table .
            ' INNER JOIN instansi ON instansi.id_instansi = aduan.id_instansi) 
                            INNER JOIN kategori_aduan ON kategori_aduan.id_kategori = aduan.id_kategori) 
                            INNER JOIN users ON users.id_user = aduan.id_user 
                            WHERE aduan.id_aduan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function statusAllAduan()
    {
        $this->db->query('SELECT COUNT(id_aduan) AS total, 
                            SUM(status_aduan = "Direspon") AS terjawab, 
                            COUNT(users.id_user) AS total_user FROM ' . $this->table .
            ' INNER JOIN users ON users.id_user = aduan.id_user');
        return $this->db->resultSet();
    }
}
