<?php
class AuthAdmin extends Controller {
    public function index()
    {
        $data['judul'] = "Sign In Admin";
        $data['css'] = "sign_in";
        if (isset($_SESSION['email-admin'])) {
            header('location: ' . BASEURL . 'authadmin/profiladmin');
        } else {
            $this->view('templates/header_admin', $data);
            $this->view('auth_admin/index', $data);
            $this->view('templates/footer');
        }
    }

    public function login()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password'])
        ];

        if (empty($data['email']) || empty($data['password'])) {
            Flasher::setFlash('Mohon isi data', 'danger');
            header('location: ' . BASEURL . 'authadmin');
            exit;
        }

        $admin_check = $this->model('Admin_model')->findUserByEmail($data['email']);

        if ($admin_check) {
            if($data['password'] == $admin_check['password']) {
                $_SESSION['email-admin'] = $admin_check['email'];
                header('location: ' . BASEURL . 'admin');
                exit;
            } else {
                Flasher::setFlash('Tidak cocok', 'danger');
                header('location: ' . BASEURL . 'authadmin');
                exit;
            }            
        } else {
            Flasher::setFlash('User belum terdaftar', 'danger');
            header('location: ' . BASEURL . 'authadmin');
            exit;
        }
    }

    public function profiladmin()
    {
        $data['judul'] = "Profil";
        $data['css'] = "profil";
        $data['user'] = $this->model('Admin_model')->findUserByEmail($_SESSION['email-admin']);
        if (isset($_SESSION['email-admin'])) {
            $this->view('templates/header_admin', $data);
            $this->view('auth_admin/profil', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . BASEURL . 'authadmin');
        }
    }

    public function signout()
    {
        unset($_SESSION['email-admin']);
        header('location: ' . BASEURL . 'admin');
    }
}