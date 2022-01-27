<div class="profil-form p-5">
    <h1 class="card-title fw-bold text-center mb-4"><?= $data['user']['nama_admin']; ?></h1>
    <div class="row">        
        <a href="<?= BASEURL; ?>authadmin/signout" class="text-decoration-none">
            <button class="btn btn-primary w-100">
                Sign Out
            </button>
        </a>
    </div>
</div>