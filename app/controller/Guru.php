<?php
class guru extends Controller
{
    public function index()
    {
        $data['judul'] = "Guru";
        $data['guru'] = $this->model('Guru_model')->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail guru";
        $data['guru'] = $this->model("Guru_model")->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('guru/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Guru_model')->tambahData($_POST) > 0) {
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Guru_model')->hapusDataguru($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'succes');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    // public function getubah()
    // {
    //     echo json_encode($this->model('Guru_model')->getGuruById($_POST['id']));
    // }

    // public function ubah()
    // {
    //     if ($this->model('guru_model')->ubahDataguru($_POST) > 0) {
    //         Flasher::setFlash('berhasil', 'diubah', 'success');
    //         header('Location: ' . BASE_URL . '/guru');
    //         exit;
    //     } else {
    //         Flasher::setFlash('gagal', 'ditambahkan', 'danger');
    //         header('Location: ' . BASE_URL . '/guru');
    //         exit;
    //     }
    // }
    public function cari()
    {
        $data['judul'] = 'guru';
        $data['guru'] = $this->model('Guru_model')->cariDataGuru();
        $this->view('templates/header', $data);
        $this->view('guru/index', $data);
        $this->view('templates/footer');
    }
}
