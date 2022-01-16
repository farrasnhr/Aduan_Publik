<?php
class Profil extends Controller
{
    public function index()
    {
        $data['judul'] = "Tentang";
        $data['css'] = "profil";
        $this->view('templates/user_check');
        $data['aduan'] = $this->model('DaftarAduan_model')->getAduanById();
        $this->view('templates/header', $data);
        $this->view('profil/index');
        $this->view('templates/footer');
    }
}
