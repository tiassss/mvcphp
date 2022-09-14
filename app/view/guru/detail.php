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
                <h5 class="card-title"><?= $data['guru']['nama']; ?></h5>
                <p class="card-text"><?= $data['guru']['mata_pelajaran']; ?></p>
                <a href="<?= BASE_URL; ?>/guru" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</body>