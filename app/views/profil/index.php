<div class="profil-form p-5">
    <h1 class="card-title fw-bold text-center mb-4"><?= $data['user']['nama']; ?></h1>
    <div class="row">
        <?php foreach ($data['aduan'] as $aduan) : ?>
            <div class="card my-3">
                <div class="card-header d-flex justify-content-between align-items-start">
                    <?= $aduan['klasifikasi']; ?>
                    <span class="badge rounded-pill bg-success"><?= $aduan['status_aduan']; ?></span>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <span class="id-aduan">#<?= $aduan['id_aduan']; ?></span>
                        <h2><?= $aduan['judul']; ?></h2>
                        <p><?= $aduan['isi']; ?></p>
                        <footer class="blockquote-footer">
                            <span><?= $aduan['status_anonim'] == 0 ? $aduan['nama'] : 'Anonim' ?></span>
                            <span><?= $aduan['tanggal_aduan']; ?></span>
                        </footer>
                    </blockquote>
                </div>
            </div>
        <?php endforeach; ?>
        <a href="<?= BASEURL; ?>auth/signout" class="text-decoration-none">
            <button class="btn btn-primary w-100">
                Sign Out
            </button>
        </a>
    </div>
</div>