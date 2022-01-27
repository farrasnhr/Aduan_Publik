<?php
class Profil extends Controller
{
    public function index()
    {
        $data['judul'] = "Tentang";
        $data['css'] = "profil";
        $data['user'] = $this->model('User_model')->findUserByEmail($_SESSION['email']);
        $data['aduan'] = $this->model('DaftarAduan_model')->getAduanByUser($data['user']['id_user']);

        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
            $this->view('templates/header', $data);
            $this->view('profil/index', $data);
            $this->view('templates/footer');
        } else {
            if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                $this->view('templates/header', $data);
                $this->view('profil/index', $data);
                $this->view('templates/footer');
            } else {
                header('location: ' . BASEURL . 'auth');
            }
        }
    }
}
