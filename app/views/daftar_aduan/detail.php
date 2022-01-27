<div class="detail-aduan-form p-5">
    <div class="group text-center">
        <span class="badge rounded-pill bg-success"><?= $data['aduan']['status_aduan']; ?></span>
    </div>
    <h1 class="fw-bold text-center"><?= $data['aduan']['judul']; ?> <span class="fw-normal fs-4 text-muted">#<?= $data['aduan']['id_aduan']; ?></span></h1>
    <div class="group">
        <span class="label-group">Isi Laporan:</span>
        <p>
            <?= $data['aduan']['isi']; ?>
        </p>
    </div>
    <div class="group">
        <span class="label-group">Lokasi:</span>
        <p><?= $data['aduan']['lokasi']; ?></p>
    </div>
    <div class="group">
        <span class="label-group">Intansi tujuan:</span>
        <p><?= $data['aduan']['instansi']; ?></p>
    </div>
    <div class="group">
        <span class="label-group">Kategori Aduan</span>
        <p><?= $data['aduan']['kategori']; ?></p>
    </div>
    <hr>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-4">
            <img src="https://via.placeholder.com/100/" alt="Profile" class="rounded-circle">
        </div>
        <div class="col-sm-8 m-0 p-0">
            <span><?= $data['aduan']['status_anonim'] == 0 ? $data['aduan']['nama'] : 'Anonim' ?></span>
            <p class="m-0"><?= $data['aduan']['tanggal_aduan']; ?></p>
        </div>
    </div>
</div>