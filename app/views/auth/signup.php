<div class="signup-form p-5">
    <h1 class="card-title fw-bold text-center mb-4">Sign Up</h1>
    <p class="text-center text-center">
        Daftar untuk <span class="fw-bold">menggunakan layanan</span> Aduan
    </p>

    <form action="<?= BASEURL; ?>auth/regist" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-nama mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="input-gender mb-3">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="gender" id="gender" required>
                        <option selected disabled value="">Pilih jenis kelamin</option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                        <option value="others">Lainnya</option>
                    </select>
                </div>
                <div class="input-tanggallahir mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-alamat mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" required>
                </div>
                <div class="input-phonenumber mb-3">
                    <label for="no_telp" class="form-label">No. Telp Aktif</label>
                    <input type="tel" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No. Telp Aktif" required>
                </div>
                <div class="input-pekerjaan mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan (opsional)">
                </div>
            </div>
            <div class="input-email mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="example@mail.com" required>
            </div>
            <div class="input-password mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password" required>
            </div>
            <div class="input-confirmpassword mb-3">
                <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" placeholder="Masukkan Password" required>
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
    <p class="text-center">Anda sudah memiliki akun? <a href="<?= BASEURL; ?>auth">Masuk</a></p>
</div>