<!DOCTYPE html>
<html lang="en">

<head>
    <!-- icon -->
    <link rel="shortcut icon" href="img/icon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #939FAE;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltmarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>">SMKN 2 TRENGGALEK</a>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kompetensi Keahlian</a>
                        <div class="dropdown-menu">
                            <a href="<?= BASE_URL; ?>/jurusan" class="dropdown-item">Rekayasa Perangkat Lunak (RPL)</a>
                            <a href="<?= BASE_URL; ?>/jurusan/dpib" class="dropdown-item">Desain Permodelan dan Informasi Bangunan (DPIB)</a>
                            <a href="<?= BASE_URL; ?>/jurusan/tp" class="dropdown-item">Teknik Pengelasan (TP)</a>
                            <a href="<?= BASE_URL; ?>/jurusan/tptup" class="dropdown-item">Teknik Pemanasan,Tata Udara dan Pendinginan (TPTUP)</a>
                            <a href="<?= BASE_URL; ?>/jurusan/tkp" class="dropdown-item">Teknik Konstruksi dan Perumahan (TKP)</a>
                            <a href="<?= BASE_URL; ?>/jurusan/kl" class="dropdown-item">Kuliner</a>
                            <a href="<?= BASE_URL; ?>/jurusan/ak" class="dropdown-item">Akutansi</a>
                        </div>
                    </li>

                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/about">About</a>


                </div>

            </div>
        </div>
        </div>
    </nav>