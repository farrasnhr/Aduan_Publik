<div class="signup-form p-5">
    <h1 class="card-title fw-bold text-center mb-4">Sign Up</h1>
    <p class="text-center text-center">
        Daftar untuk <span class="fw-bold">menggunakan layanan</span> Aduan
    </p>

    <form action="" method="post">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-nik mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK" required>
                </div>
                <div class="input-namalengkap mb-3">
                    <label for="namalengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namalengkap" placeholder="Masukkan Nama Lengkap">
                </div>
                <div class="input-gender mb-3">
                    <label for="instansi-tujuan" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="instansi-tujuan" required>
                        <option selected disabled value="">Pilih jenis kelamin</option>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                        <option value="others">Lainnya</option>
                    </select>
                </div>
                <div class="input-pekerjaan mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan (opsional)">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-tanggallahir mb-3">
                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="input-phonenumber mb-3">
                    <label for="phonenumber" class="form-label">No. Telp Aktif</label>
                    <input type="tel" class="form-control" id="phonenumber" placeholder="Masukkan No. Telp Aktif">
                </div>
                <div class="input-alamat mb-3">
                    <label for="alamat" class="form-label">Tempat Tinggal</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Tempat Tinggal">
                </div>
                <div class="input-kebutuhankhusus mb-3">
                    <label for="kebutuhankhusus" class="form-label">Penyandang Disabilitas</label>
                    <select class="form-select" id="kebutuhankhusus" required>
                        <option selected disabled value="">Pilih status</option>
                        <option value="1">Ya</option>
                        <option value="2">Tidak</option>
                    </select>
                </div>
            </div>
            <div class="input-username mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan username" required>
            </div>
            <div class="input-email mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="example@mail.com" required>
            </div>
            <div class="input-password mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan Password" required>
            </div>
            <div class="input-confirmpassword mb-3">
                <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirmpassword" placeholder="Masukkan Password" required>
            </div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="termcondition" required>
            <label class="form-check-label" for="termcondition">Saya menyetujui Ketentuan
                Layanan
                dan Kebijakan Privasi</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">SIGN UP</button>
    </form>
    <hr>
    <p class="text-center">Anda sudah memiliki akun? <a href="<?= BASEURL; ?>signin">Masuk</a></p>
</div>