<div class="h-100 mt-5 mb-5 pt-5 pb-5 d-flex justify-content-center align-items-center">
    <div class="card login-form">
        <div class="card-body">
            <h2 class="card-title fw-bold text-center mb-4">LOGIN</h2>
            <h6 class="card-subtitle text-muted mb-4 fw-bold text-center">
                login terlebih dahulu jika ingin menggunakan situs ini!
            </h6>

            <!-- Masuk dengan Gmail -->
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-info text-white btn-gmail"><img src="<?= BASEURL; ?>img/google.png" class="img-google me-2" alt="Gmail">Masuk dengan Gmail</a>
            </div>

            <!-- Masuk dengan Facebook -->
            <div class="d-grid mt-3">
                <a href="#" class="btn btn-info text-white btn-facebook"><img src="<?= BASEURL; ?>img/facebook.png" class="img-facebook me-2" alt="Facebook">Masuk dengan Facebook</a>
            </div>

            <!-- Masuk dengan Twitter -->
            <div class="d-grid mt-3 mb-4">
                <a href="#" class="btn btn-info text-white btn-facebook"><img src="<?= BASEURL; ?>img/twitter.png" class="img-twitter me-2" alt="Twitter">Masuk dengan Twitter</a>
            </div>

            <!-- Form email dan password  -->
            <form>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email kamu...">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password kamu...">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingatkan Saya</label>
                </div>

                <!-- Button Login -->
                <div class="d-grid mt-3">
                    <a href="#" class="btn btn-info text-white btn-masuk">LOGIN</a>
                </div>

                <!-- Daftar Sekarang -->
                <div class="link mt-3">
                    <label>Anda belum memiliki akun? <a href="<?= BASEURL; ?>signup">Daftarkan Sekarang</a></label>
                </div>
            </form>
        </div>
    </div>
</div>