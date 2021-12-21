<?php
class DashboardAdmin extends Controller {
    public function index() {
        $data['judul'] = "Tentang";
        $this->view('templates/header', $data);
        $this->view('dashboard_admin/index');
        $this->view('templates/footer');
    }
}