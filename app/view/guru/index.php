<body>

    <div class="container mt-4">
        <div class="row">
            <div class="card-body">
                <div class="col-md-6">
                    <table class="table">
                        <?php Flasher::flash(); ?>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Guru</button>

                        <div class="card-body">
                            <h3 class="mt-4">DATA GURU SMKN 2 TRENGGALEK</h3>
                            <div class="input-group">
                                <form action="<?= BASE_URL; ?>/guru/cari" method="post">
                                    <input type="text" class="form-control" placeholder="cari guru..." name="keyword" id="keyword" autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                                </form>
                            </div>
                        </div>

                        <thead>
                            <tr>
                                <th scope="col">NAMA GURU</th>
                                <!-- <th scope="col">MATA PELAJARAN</th> -->
                                <th scope="col">DETAIL</th>
                            </tr>
                        </thead>
                        <br>
                        <tbody>
                            <tr>
                                <td> <?php foreach ($data['guru'] as $guru) : ?>
                                        <hr>
                                        <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                                            <?= $guru['nama']; ?>
                                        </li>
                                        <hr>
                                    <?php endforeach; ?>
                                </td>

                                <td>

                                    <?php foreach ($data['guru'] as $guru) : ?>
                                        <hr>
                                        <li class="list-group-item list-group-item d-flex justify-content-between align-items-center"><a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="btn btn-primary float-right float-right ml-1">Lihat</a>
                                            <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="btn btn-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                                            <a href="<?= BASE_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="btn btn-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $guru['id']; ?>">Ubah</a>
                                            <input type="hidden" name="id" id="id">
                                            <hr>
                                        </li>
                                    <?php endforeach; ?>
                                </td>
                            </tr>
                </div>

            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Isi Data Guru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="<?= BASE_URL; ?>/guru/tambah" method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="mata_pelajaran">Mata pelajaran</label>
                                <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran">
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</body>