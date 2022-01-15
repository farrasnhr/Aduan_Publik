<div class="daftar-aduan-form p-5">
    <h1 class="fw-bold text-center">Daftar Aduan</h1>
    <?php foreach ($data['aduan'] as $aduan) : ?>
        <a href="<?= BASEURL; ?>daftaraduan/detail/<?= $aduan['id_aduan']; ?>" class="text-decoration-none">
            <div class="card my-3">
                <div class="card-header d-flex justify-content-between align-items-start">
                    <?= $aduan['id_kategori']; ?>
                    <span class="badge rounded-pill bg-success"><?= $aduan['status_aduan']; ?></span>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <span class="id-aduan">#<?= $aduan['id_aduan']; ?></span>
                        <h2><?= $aduan['judul']; ?></h2>
                        <p><?= $aduan['isi']; ?></p>
                        <footer class="blockquote-footer">
                            <span><?= $aduan['id_user']; ?></span>
                            <span><?= $aduan['status_anonim']; ?></span>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>