<?php
class Aduan extends Controller
{
    public function index()
    {
        $data['judul'] = "Aduan";
        $data['css'] = "aduan";
        $data['instansi'] = $this->model('Aduan_model')->getInputInstansiData();
        $data['klasifikasi'] = $this->model('Aduan_model')->getInputKlasifikasiData();
        $data['kategori'] = $this->model('Aduan_model')->getInputKategoriData();
        $this->view('templates/header', $data);
        $this->view('aduan/index', $data);
        $this->view('templates/footer');
    }
}
