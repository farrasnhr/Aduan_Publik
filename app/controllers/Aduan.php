<?php
class Aduan extends Controller {
    public function index() {
        $data['judul'] = "Aduan";
        $data['css'] = "aduan";
        $this->view('templates/header', $data);
        $this->view('aduan/index');
        $this->view('templates/footer');
    }
}