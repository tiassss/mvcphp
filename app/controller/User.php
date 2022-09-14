<?php
class User extends Controller
{
    public function index()
    {
        // echo "User/index";
        $data["judul"] = "User";
        $this->view("templates/header", $data);
        $this->view("user/index");
        $this->view("templates/footer");
    }
    public function profile($nama = "Tias", $pekerjaan = "Pelajar")
    {
        // echo "Salam Kenal saya $nama,saya seorang $pekerjaan";
        $data["judul"] = "User";
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $this->view("templates/header", $data);
        $this->view("user/profile");
        $this->view("templates/footer");
    }
}
