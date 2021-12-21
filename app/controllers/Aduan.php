<?php
class Aduan extends Controller {
    public function index()
    {
        $data['judul'] = "";
        $this->view('templates/header', $data);
        $this->view('aduan/index');
        $this->view('templates/footer');
    }
}