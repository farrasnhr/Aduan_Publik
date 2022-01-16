<?php
class SignUp extends Controller
{
    public function index()
    {
        $data['judul'] = "Sign Up";
        $data['css'] = "sign_up";
        $this->view('templates/header', $data);
        $this->view('sign_up/index');
        $this->view('templates/footer');
    }
}
