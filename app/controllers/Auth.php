<?php
class Auth extends Controller
{
    public function index()
    {
        $data['judul'] = "Sign In";
        $data['css'] = "sign_in";
        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
            header('location: ' . BASEURL . 'profil');
        } else {
            if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                header('location: ' . BASEURL . 'profil');                
            } else {
                $this->view('templates/header', $data);
                $this->view('auth/index');
                $this->view('templates/footer');
            }
        }        
    }
    public function signup()
    {
        $data['judul'] = "Sign Up";
        $data['css'] = "sign_up";
        if ((isset($_SESSION['email']) && isset($_SESSION['password'])) || (isset($_COOKIE['email']) && isset($_COOKIE['password']))) {
            header('location: ' . BASEURL . 'profil');
        }
        $this->view('templates/header', $data);
        $this->view('auth/signup', $data);
        $this->view('templates/footer');
    }
    public function regist()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // validation
        $data = [
            'nama' => trim($_POST['nama']),
            'gender' => trim($_POST['gender']),
            'tanggal_lahir' => trim($_POST['tanggal_lahir']),
            'alamat' => $_POST['alamat'],
            'no_telp' => trim($_POST['no_telp']),
            'pekerjaan' => $_POST['pekerjaan'],
            'email' => trim($_POST['email']),
            'password' => $_POST['password'],
            'confirmpassword' => $_POST['confirmpassword']
        ];

        if (
            empty($data['nama']) || empty($data['gender']) || empty($data['tanggal_lahir']) ||
            empty($data['alamat']) || empty($data['no_telp']) ||
            empty($data['password'])
        ) {
            Flasher::setFlash('Mohon isi data', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }

        if (!preg_match("/^(\+62)8[1-9][0-9]{6,9}$/", $data['no_telp'])) {
            Flasher::setFlash('Format No Telp Tidak Valid', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }

        if ($this->model('User_model')->findUserByEmail($data['email'])) {
            Flasher::setFlash('User sudah terdaftar', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }

        if ($data['password'] !== $data['confirmpassword']) {
            Flasher::setFlash('Konfirmasi Password Salah', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }

        // hash password
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        if ($this->model('User_model')->registerUser($_POST) > 0) {
            Flasher::setFlash('Berhasil mendaftar, sign in untuk verifikasi', 'success');
            header('location: ' . BASEURL . 'auth');
            exit;
        } else {
            Flasher::setFlash('Gagal mendaftar, mohon coba lagi', 'danger');
            header('location: ' . BASEURL . 'auth/signup');
            exit;
        }
        // var_dump($_POST);
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
            header('location: ' . BASEURL . 'auth');
            exit;
        }

        if ($this->model('User_model')->findUserByEmail($data['email'])) {
            $loggedInUser = $this->model('User_model')->unlockHashPassword($data['email'], $data['password']);
            if ($loggedInUser) {
                $_SESSION['email'] = $loggedInUser['email'];
                $_SESSION['password'] = $loggedInUser['password'];
                if (isset($_POST['ingat-saya'])) {
                    setcookie("email", $loggedInUser['email'], time() + 3600);
                    setcookie("password", $loggedInUser['password'], time() + 3600);
                }
                header('location: ' . BASEURL . 'profil');
                exit;
            } else {
                Flasher::setFlash('Password salah', 'danger');
                header('location: ' . BASEURL . 'auth');
                exit;
            }
        } else {
            Flasher::setFlash('User belum terdaftar', 'danger');
            header('location: ' . BASEURL . 'auth');
            exit;
        }
    }

    public function signout()
    {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        if (isset($_COOKIE['email'])) {
            setcookie("email", "", time() - 3600);
            setcookie("password", "", time() - 3600);
        }
        header('location: ' . BASEURL . 'auth');
    }
}
