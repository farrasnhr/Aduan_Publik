<?php
class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = "Admin";
        $data['css'] = "admin";
        $data['aduan'] = $this->model('DaftarAduan_model')->getAllAduanPublik();
        if (isset($_SESSION['email-admin'])) {
            $this->view('templates/header_admin', $data);
            $this->view('dashboard_admin/index', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . BASEURL . 'authadmin/profiladmin');
        }
    }

    public function terima($id)
    {
        if ($this->model('DaftarAduan_model')->changeDiterima($id) > 0) {
            header('location: ' . BASEURL . 'admin');
            exit;
        } else {
            header('location: ' . BASEURL . 'admin');
            exit;
        }
    }

    public function tolak($id)
    {
        if ($this->model('DaftarAduan_model')->changeDitolak($id) > 0) {
            header('location: ' . BASEURL . 'admin');
            exit;
        } else {
            header('location: ' . BASEURL . 'admin');
            exit;
        }
    }
}
