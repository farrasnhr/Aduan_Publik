<?php
class SignIn extends Controller
{
    public function index()
    {
        $data['judul'] = "Sign In";
        $data['css'] = "sign_in";
        $this->view('templates/header', $data);
        $this->view('sign_in/index');
        $this->view('templates/footer');
    }
}
