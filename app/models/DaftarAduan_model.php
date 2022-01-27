<?php
class DaftarAduan_model
{
    private $table = 'aduan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getListId($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_aduan=:id AND status_rahasia=0');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllAduanPublik()
    {
        $this->db->query('SELECT klasifikasi_aduan.klasifikasi, aduan.status_aduan, aduan.id_aduan, aduan.judul, aduan.isi, aduan.status_anonim, users.nama, aduan.tanggal_aduan FROM ((' . $this->table .
            ' INNER JOIN klasifikasi_aduan ON klasifikasi_aduan.id_klasifikasi = aduan.id_klasifikasi) 
                            INNER JOIN users ON users.id_user = aduan.id_user) 
                            WHERE status_rahasia=0');
        return $this->db->resultSet();
    }

    public function getKategoriStats()
    {
        // SELECT kategori, COUNT(*) FROM (aduan INNER JOIN kategori_aduan ON kategori_aduan.id_kategori = aduan.id_kategori) GROUP BY kategori;
        $this->db->query('SELECT kategori, COUNT(*) FROM (' . $this->table . ') INNER JOIN kategori_aduan ON kategori_aduan.id_kategori = aduan.id_kategori) GROUP BY kategori');
        return $this->db->resultSet();
    }

    public function getKlasifikasiStats()
    {
        // SELECT klasifikasi, COUNT(*) FROM (aduan INNER JOIN klasifikasi_aduan ON klasifikasi_aduan.id_klasifikasi = aduan.id_klasifikasi) GROUP BY klasifikasi;
        $this->db->query('SELECT klasifikasi, COUNT(*) FROM (' . $this->table . ') INNER JOIN klasifikasi_aduan ON klasifikasi_aduan.id_klasifikasi = aduan.id_klasifikasi) GROUP BY klasifikasi');
        return $this->db->resultSet();
    }

    public function getInstansiStats()
    {
        // SELECT instansi, COUNT(*) FROM (aduan INNER JOIN instansi ON instansi.id_instansi = aduan.id_instansi) GROUP BY instansi;
        $this->db->query('SELECT instansi, COUNT(*) FROM (' . $this->table . ') INNER JOIN instansi ON instansi.id_instansi = aduan.id_instansi) GROUP BY instansi');
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
                            COUNT(DISTINCT(users.id_user)) AS total_user FROM ' . $this->table .
            ' INNER JOIN users ON users.id_user = aduan.id_user');
        return $this->db->resultSet();
    }

    public function getAduanByUser($id)
    {
        $this->db->query('SELECT klasifikasi_aduan.klasifikasi, aduan.status_aduan, aduan.id_aduan, aduan.judul, aduan.isi, aduan.status_anonim, users.nama, aduan.tanggal_aduan FROM ((' . $this->table .
            ' INNER JOIN klasifikasi_aduan ON klasifikasi_aduan.id_klasifikasi = aduan.id_klasifikasi) 
                            INNER JOIN users ON users.id_user = aduan.id_user) WHERE aduan.id_user=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function changeDiterima($id)
    {
        $query = "UPDATE aduan SET status_aduan = 'Direspon' WHERE aduan.id_aduan=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function changeDitolak($id)
    {
        $query = "UPDATE aduan SET status_aduan = 'Ditolak' WHERE aduan.id_aduan=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
