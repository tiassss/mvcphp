<?php
class Jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "Rekayasa Perangkat Lunak";
        $this->view('templates/header', $data);
        $this->view('jurusan/rpl');
        $this->view('templates/footer');
    }

    public function dpib()
    {
        $data['judul'] = "Desain Permodelan dan Informasi Bangunan";
        $this->view('templates/header', $data);
        $this->view('jurusan/dpib', $data);
        $this->view('templates/footer');
    }

    public function tkp()
    {
        $data['judul'] = "Teknik Konstruksi dan Perumahan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tkp', $data);
        $this->view('templates/footer');
    }

    public function tp()
    {
        $data['judul'] = "Teknik Pengelasan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tp', $data);
        $this->view('templates/footer');
    }

    public function kl()
    {
        $data['judul'] = "Kuliner";
        $this->view('templates/header', $data);
        $this->view('jurusan/kl', $data);
        $this->view('templates/footer');
    }

    public function tptup()
    {
        $data['judul'] = "Teknik Pendingin Tata Udara dan Pemanasan";
        $this->view('templates/header', $data);
        $this->view('jurusan/tptup', $data);
        $this->view('templates/footer');
    }

    public function ak()
    {
        $data['judul'] = "Akutansi";
        $this->view('templates/header', $data);
        $this->view('jurusan/ak', $data);
        $this->view('templates/footer');
    }
}
