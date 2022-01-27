<div class="signin-form p-5">
    <h1 class="card-title fw-bold text-center mb-4">Sign In</h1>
    <p class="text-center text-center">
        Masuk untuk <span class="fw-bold">menggunakan layanan</span> Admin
    </p>

    <?php Flasher::flash(); ?>

    <form action="<?= BASEURL; ?>authadmin/login" method="POST">
        <div class="input-email mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
        </div>
        <div class="input-password mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">SIGN IN</button>
    </form>
    <hr>
    <p class="text-center">Penambahan admin hanya dilakukan secara internal</p>
</div>