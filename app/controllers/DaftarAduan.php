<?php
class DaftarAduan extends Controller {
    public function index() {
        $data['judul'] = "Daftar Aduan";
        $data['css'] = "daftar_aduan";
        $data['aduan'] = $this->model('Aduan_model')->getAllAduan();
        $this->view('templates/header', $data);
        $this->view('daftar_aduan/index', $data);
        $this->view('templates/footer');
    }

    public function detail() {
        $data['judul'] = "Tentang";
        $data['css'] = "detail_aduan";
        $this->view('templates/header', $data);
        $this->view('daftar_aduan/detail');
        $this->view('templates/footer');
    }
}