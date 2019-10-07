<div class="container mt-4">

    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            
                <!-- <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['nrp']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                </ul> -->

                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs) : ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class = "badge badge-primary">detail</a>
                        </li>
                    <?php endforeach; ?>    
                </ul>        
        </div>
    </div>

</div>