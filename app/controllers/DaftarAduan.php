<?php
class DaftarAduan extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $this->view('templates/header', $data);
        $this->view('daftar_aduan/index');
        $this->view('templates/footer');
    }
}