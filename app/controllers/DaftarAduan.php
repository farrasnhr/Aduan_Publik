<?php
class DaftarAduan extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar Mahasiswa";
        $data['css'] = "daftar_aduan";
        $data['aduan'] = $this->model('DaftarAduan_model')->getAllAduanPublik();
        $this->view('templates/header', $data);
        $this->view('daftar_aduan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Mahasiswa";
        $data['css'] = "detail_aduan";
        $missingId = $this->model('DaftarAduan_model')->getListId($id);
        if (count($missingId) > 0) {
            $data['aduan'] = $this->model('DaftarAduan_model')->getAduanById($id);
            $this->view('templates/header', $data);
            $this->view('daftar_aduan/detail', $data);
            $this->view('templates/footer');
        } else {
            header('location: ' . BASEURL);
        }
    }
}
