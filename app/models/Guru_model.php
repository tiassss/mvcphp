<?php
class Guru_model
{

    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        //data source name
        // $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";
        // try {
        //     $this->dbh = new PDO($dsn, 'root', '');
        // } catch (PDOException $e) {
        //     die($e->getMessage());
        // }
    }

    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO guru VALUES ('', :nama, :mata_pelajaran) ";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataGuru($id)
    {
        $query = " DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // public function ubahDataSiswa($data)
    // {
    //     $query = " UPDATE siswa SET
    //      nama = :nama,
    //      jenis_kelamin = :jenis_kelamin,
    //      alamat = :alamat
    //      WHERE id = :id;

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
    //     $this->db->bind('alamat', $data['alamat']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


}
