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

    public function insertData()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $temp = [
            'status_anonim' => '0',
            'status_rahasia' => '0',
            'id_user' => '0'
        ];

        if (isset($_POST['status_anonim'])) {
            $temp['status_anonim'] = 1;
        } else {
            $temp['status_anonim'] = 0;
        }

        if (isset($_POST['status_rahasia'])) {
            $temp['status_rahasia'] = 1;
        } else {
            $temp['status_rahasia'] = 0;
        }
        
        if (isset($_SESSION['email'])) {
            $getId = $this->model('User_model')->findUserByEmail($_SESSION['email']);
            $temp['id_user'] = $getId['id_user'];
        }

        // validation
        $data = [
            'judul' => $_POST['judul'],
            'isi' => $_POST['isi'],
            'tanggal_aduan' => $_POST['tanggal_aduan'],
            'lokasi' => $_POST['lokasi'],
            'id_kategori' => $_POST['id_kategori'],
            'id_instansi' => $_POST['id_instansi'],
            'id_klasifikasi' => $_POST['id_klasifikasi'],
        ];

        $data += $temp;

        // var_dump($data);

        if ($this->model('Aduan_model')->addAduanData($data) > 0) {
            // Flasher::setFlash('Berhasil mendaftar, sign in untuk verifikasi', 'success');
            header('location: ' . BASEURL . 'profil');
            exit;
        } else {
            // Flasher::setFlash('Gagal mendaftar, mohon coba lagi', 'danger');
            header('location: ' . BASEURL);
            exit;
        }
    }
}
