<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial- scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman <?= $data['judul']; ?></title>
</head>

<body>
    <div class="container text-center mt-4">
        <h1>Halaman User</h1>
        <img src="<? BASE_URL; ?>/img/Profile.png" class="rounded-circle shadow">
        <p>Halo, nama saya <?= $data['nama']; ?>, saya seorang <?= $data['pekerjaan']; ?></p>
    </div>

</body>

</html>