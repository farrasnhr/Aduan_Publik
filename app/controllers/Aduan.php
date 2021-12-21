<?php
class Aduan extends Controller {
    public function index()
    {
        $data['judul'] = "Aduan";
        $this->view('templates/header', $data);
        $this->view('aduan/index');
        $this->view('templates/footer');
    }
}