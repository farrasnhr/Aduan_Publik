<h1 class="text-center fw-bold"> Sampaikan Laporan Anda </h1>
<form action="POST" class="mb-5 pb-5">
    <div class="form-klasifikasi-laporan">
        <h3 id="title_bawah" class="text-start"> Pilih klasifikasi laporan</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card form-check">
                    <input class="form-check-input fci-radio" type="radio" name="klasifikasi-laporan" id="form-pengaduan">
                    <label class="form-check-label" for="form-pengaduan">
                        <img src="" alt="">
                        <span>Pengaduan</span>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card form-check">
                    <input class="form-check-input fci-radio" type="radio" name="klasifikasi-laporan" id="form-aspirasi">
                    <label class="form-check-label" for="form-aspirasi">
                        <img src="" alt="">
                        <span>Aspirasi</span>
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card form-check">
                    <input class="form-check-input fci-radio" type="radio" name="klasifikasi-laporan" id="form-permintaan-informasi">
                    <label class="form-check-label" for="form-permintaan-informasi">
                        <img src="" alt="">
                        <span>Permintaan Informasi</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group was-validated">
        <label for="judul-laporan" class="form-label">Judul Laporan</label>
        <input type="text" class="form-control" id="judul-laporan" aria-describedby="inputJudulLaporan validationJudulLaporanFeedback" placeholder="Isi Judul Laporan" required>
    </div>
    <div class="form-group was-validated">
        <label for="isi-laporan" class="form-label">Isi Laporan</label>
        <textarea class="form-control is-invalid" aria-describedby="inputIsiLaporan validationIsiLaporanFeedback" placeholder="Isi Laporan" id="isi-laporan" style="height: 200px" required></textarea>
    </div>
    <div class="form-group was-validated">
        <label for="tanggal-laporan">Tanggal</label>
        <input type="date" class="form-control" id="tanggal-laporan" placeholder="Tanggal kejadian" required>

    </div>
    <div class="form-group was-validated">
        <label for="lokasi-kejadian">Lokasi Kejadian*</label>
        <input type="text" class="form-control" id="lokasi-kejadian" placeholder="Isi Lokasi Kejadian" required>
    </div>
    <div class="form-group was-validated">
        <label for="kategori-laporan" class="form-label">Kategori Laporan</label>
        <select class="form-select is-invalid" id="kategori-laporan" required>
            <option selected disabled value="">Pilih kategori laporan</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
        </select>
    </div>
    <div class="form-group was-validated">
        <label for="instansi-tujuan" class="form-label">Instansi Tujuan</label>
        <select class="form-select is-invalid" id="instansi-tujuan" required>
            <option selected disabled value="">Pilih instansi tujuan</option>
            <option value="">...</option>
            <option value="">...</option>
            <option value="">...</option>
        </select>
    </div>
    <div class="form-group">
        <label for="form-file">Lampiran (Opsional)</label>
        <input class="form-control" type="file" id="form-file">
    </div>
    <div class="form-check was-validated">
        <input type="checkbox" class="form-check-input" id="persetujuan-layanan-privasi" required>
        <label class="form-check-label" for="persetujuan-layanan-privasi">Saya menyetujui Ketentuan Layanan dan Kebijakan Privasi</label>
    </div>
    <div class="form-group row mt-3">
        <div class="col-9">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Anonim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Rahasia</label>
            </div>
        </div>
        <div class="col">
            <button type="button" class="btn btn-warning">LAPOR !</button>
        </div>
    </div>
</form>