<div class="daftar-aduan-form p-5">
    <h1 class="fw-bold text-center">Daftar Aduan</h1>
    <a href="#" class="text-decoration-none">
        <div class="card my-3">
            <div class="card-header d-flex justify-content-between align-items-start">
                Kategori Laporan
                <span class="badge rounded-pill bg-success">Success</span>
            </div>
            <?php foreach ($data['aduan'] as $aduan ) : ?>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <span class="id-aduan">#<?= $aduan['id']; ?></span>
                        <h2>Judul Laporan</h2>
                        <p>Isi laporan</p>
                        <footer class="blockquote-footer">
                            <span>Anonim</span>
                            <span>11 Desember 2021</span>
                        </footer>
                    </blockquote>
                </div>              
            <?php endforeach; ?>
        </div>
    </a>
</div>