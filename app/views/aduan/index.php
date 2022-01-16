<div class="aduan-form p-5">
    <h1 class="text-center fw-bold"> Sampaikan Laporan Anda </h1>
    <form action="" method="POST">
        <div class="form-klasifikasi-laporan">
            <span class="form-label"> Pilih klasifikasi laporan</>
                <div class="row py-0 pe-4">
                    <?php foreach ($data['klasifikasi'] as $klasifikasi) : ?>
                        <div class="col-md-4 my-1 p-1">
                            <div class="card-check form-check text-center">
                                <input class="form-check-input fci-radio" type="radio" name="klasifikasi-laporan" id="<?= 'form-', strtolower(preg_replace('/\s+/', '-', $klasifikasi['klasifikasi'])); ?>" required>
                                <label class="form-check-label" for="<?= 'form-', strtolower(preg_replace('/\s+/', '-', $klasifikasi['klasifikasi'])); ?>">
                                    <?= file_get_contents(BASEURL . $klasifikasi['icon']); ?>
                                    <span><?= $klasifikasi['klasifikasi']; ?></span>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
        </div>
        <div class="form-group was-validated">
            <label for="judul-laporan" class="form-label">Judul Laporan</label>
            <input type="text" class="form-control" id="judul-laporan" aria-describedby="inputJudulLaporan validationJudulLaporanFeedback" placeholder="Isi Judul Laporan" required>
        </div>
        <div class="form-group was-validated">
            <label for="isi-laporan" class="form-label">Isi Laporan</label>
            <textarea class="form-control is-invalid" aria-describedby="inputIsiLaporan validationIsiLaporanFeedback" placeholder="Isi Laporan" id="isi-laporan" required></textarea>
        </div>
        <div class="form-group was-validated">
            <label class="form-label" for="tanggal-laporan">Tanggal</label>
            <input type="date" class="form-control" id="tanggal-laporan" placeholder="Tanggal kejadian" required>

        </div>
        <div class="form-group was-validated">
            <label class="form-label" for="lokasi-kejadian">Lokasi Kejadian</label>
            <input type="text" class="form-control" id="lokasi-kejadian" placeholder="Isi Lokasi Kejadian" required>
        </div>
        <div class="form-group was-validated">
            <label for="kategori-laporan" class="form-label">Kategori Laporan</label>
            <select class="form-select is-invalid" id="kategori-laporan" required>
                <option selected disabled value="">Pilih kategori laporan</option>
                <?php foreach ($data['kategori'] as $kategori) : ?>
                    <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['kategori'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group was-validated">
            <label for="instansi-tujuan" class="form-label">Instansi Tujuan</label>
            <select class="form-select is-invalid" id="instansi-tujuan" required>
                <option selected disabled value="">Pilih instansi tujuan</option>
                <?php foreach ($data['instansi'] as $instansi) : ?>
                    <option value="<?= $instansi['id_instansi'] ?>"><?= $instansi['instansi'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-check was-validated mt-3">
            <input type="checkbox" class="form-check-input" id="persetujuan-layanan-privasi" required>
            <label class="form-check-label" for="persetujuan-layanan-privasi">Saya menyetujui Ketentuan
                Layanan
                dan Kebijakan Privasi</label>
        </div>
        <div class="form-group row mt-3">
            <div class="col-lg-6 my-1">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Anonim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Rahasia</label>
                </div>
            </div>
            <div class="col-lg-6 my-1">
                <button type="submit" class="btn btn-primary w-100">LAPOR !</button>
            </div>
        </div>
    </form>
</div>