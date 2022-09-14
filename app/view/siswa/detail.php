<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>

<body>
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['siswa']['jenis_kelamin']; ?></h6>
                <p class="card-text"><?= $data['siswa']['alamat']; ?></p>
                <a href="<?= BASE_URL; ?>/siswa" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</body>