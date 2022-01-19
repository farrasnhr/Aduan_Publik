<?php
class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = "Sign In";
        $data['css'] = "sign_in";
        $this->view('templates/header', $data);
        $this->view('auth/index');
        $this->view('templates/footer');
    }
    public function signup()
    {
        $data['judul'] = "Sign Up";
        $data['css'] = "sign_up";
        $data['js-validation'] = "signup-validation";
        $this->view('templates/header', $data);
        $this->view('auth/signup', $data);
        $this->view('templates/footer');
    }
    public function regist()
    {
        if ($this->model('User_model')->registerUser($_POST) > 0) {
            // Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('location: ' . BASEURL . 'auth');
            exit;
        } else {
            // Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }
        // var_dump($_POST);
    }
    public function login()
    {
        # code...
    }
}
