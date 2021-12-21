<?php
class SignUp extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $this->view('templates/header', $data);
        $this->view('sign_up/index');
        $this->view('templates/footer');
    }
}