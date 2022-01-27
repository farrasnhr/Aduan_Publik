<?php
class About extends Controller
{
    public function index()
    {
        $data['judul'] = "Tentang";
        $data['css'] = "about";
        $data['aduan'] = $this->model('DaftarAduan_model')->statusAllAduan();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
