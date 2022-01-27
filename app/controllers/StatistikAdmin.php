<?php
class StatistikAdmin extends Controller {
    public function index()
    {
        $data['judul'] = "Statistik Aduan";
        $data['css'] = "admin";
        // $data['kategori'] = $this->model('DaftarAduan_model')->getKategoriStats();
        // $data['klasifikasi'] = $this->model('DaftarAduan_model')->getKlasifikasiStats();
        // $data['instansi'] = $this->model('DaftarAduan_model')->getInstansiStats();
        if (isset($_SESSION['email-admin'])) {
            $this->view('templates/header_admin', $data);
            $this->view('statistik_admin/index', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . BASEURL . 'authadmin/profiladmin');            
        }
    }
}