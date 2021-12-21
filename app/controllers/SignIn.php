<?php
class SignIn extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $this->view('templates/header', $data);
        $this->view('sign_in/index');
        $this->view('templates/footer');
    }
}