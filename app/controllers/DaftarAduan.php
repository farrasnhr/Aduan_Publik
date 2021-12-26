<?php
class DaftarAduan extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $data['css'] = "daftar_aduan";
        $this->view('templates/header', $data);
        $this->view('daftar_aduan/index');
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