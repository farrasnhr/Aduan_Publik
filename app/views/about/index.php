<div class="about-form p-5">
    <h1 class="fw-bold text-center mb-4">Siapa Kami?</h1>
    <p>
        Kami adalah Tim yang menampung aspirasi Anda agar bisa kita wujudkan bersama untuk Indonesia yang
        maju dan sejahtera.
    </p>
    <p>
        Melalui Aplikasi ini kami ingin berbagi, kami ingin anda menceritakan, memberitahu kami,
        memberi kami informasi terkini mengenai aspirasi yang anda harapkan.
    </p>
    <p>
        Kami memiliki unit yang akan
        siap merespon anda selama 24 jam, kami membangun layanan untuk memberi kebutuhan untuk Anda, agar
        bisa
        lebih dekat,
        lebih bisa mengontrol kinerja kami dan mampu memberi saran dan masukan bagi pengembangan kami dimasa
        depan.
    </p>
    <p>Terima kasih</p>
    <div class="row align-items-start data-stats my-5">
        <div class="col-md-4 text-center">
            <h3 class="label fw-bold">Total Aduan</h3>
            <div class="data-label"><?= $data['aduan'][0]['total']; ?></div>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="label fw-bold">Aduan Terkurasi</h3>
            <div class="data-label"><?= $data['aduan'][0]['terjawab']; ?></div>
        </div>
        <div class="col-md-4 text-center">
            <h3 class="label fw-bold">Jumlah Pengguna</h3>
            <div class="data-label"><?= $data['aduan'][0]['total_user']; ?></div>
        </div>
    </div>
</div>