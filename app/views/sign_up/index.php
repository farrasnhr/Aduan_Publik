<div class="h-100 mt-5 mb-5 pt-5 pb-5 d-flex justify-content-center align-items-center">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title fw-bold text-center mb-4">DAFTAR</h2>
            <h6 class="card-subtitle text-muted mb-4 fw-bold text-center">
                daftar terlebih dahulu jika ingin menggunakan situs ini!
            </h6>

            <!-- Masuk dengan Gmail -->
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-info text-white btn-gmail"><img src="google.png" class="img-google me-2" alt="Gmail">Masuk dengan Gmail</a>
            </div>

            <!-- Masuk dengan Facebook -->
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-info text-white btn-facebook"><img src="facebook.png" class="img-facebook me-2" alt="Facebook">Masuk dengan Facebook</a>
            </div>

            <!-- Masuk dengan Twitter -->
            <div class="d-grid mt-3 mb-4">
                <a href="#" class="btn btn-info text-white btn-facebook"><img src="twitter.png" class="img-twitter me-2" alt="Twitter">Masuk dengan Twitter</a>
            </div>

            <!-- form daftar-->
            <form>
                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="NIK" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="KTP">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Tempat Tinggal</label>
                        <input type="tempat" class="form-control" id="exampleInputPassword1" placeholder="Tempat Tinggal Saat ini">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                        <select type="jenis" class="form-select" id="floatingSelect">
                            <option selected>Pilih Jenis Kelamin Anda</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Pekerjaan</label>
                        <input type="pekerjaan" class="form-control" id="exampleInputPassword1" placeholder="Ketik Pekerjaan anda">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="haidar@gmail.com">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                        <input type="tanggal" class="form-control" id="exampleInputPassword1" placeholder="07/31/2000">
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">No. Telp Aktif</label>
                        <input type="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Minimal 8-14 Angka">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Penyandang Disabilitas</label>
                        <select type="penyandang" class="form-select" id="floatingSelect">
                            <option selected>Pilih Status</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Minimal 8 Karakter">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Password Confirm</label>
                        <input type="confirm" class="form-control" id="exampleInputPassword1" placeholder="Minimal 8 Karakter">
                    </div>
                </div>
            </form>

            <!-- Button Daftar -->
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-info text-white btn-daftar">DAFTAR</a>
            </div>
        </div>
    </div>
</div>