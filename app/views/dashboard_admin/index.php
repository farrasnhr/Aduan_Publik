<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="dashboard-admin p-5">
    <h1 class="fw-bold text-center mb-4">Mari Kurasi Aduan</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Judul</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['aduan'] as $aduan) : ?>
                <tr>
                    <th scope="row"><?= $aduan['id_aduan']; ?></th>
                    <td><?= $aduan['judul']; ?></td>
                    <td><?= $aduan['status_aduan']; ?></td>
                    <td>
                        <a class="badge bg-danger text-decoration-none float-end ms-2" href="<?= BASEURL; ?>admin/tolak/<?= $aduan['id_aduan']; ?>">Tolak</a>
                        <a class="badge bg-info text-decoration-none float-end ms-2" href="<?= BASEURL; ?>admin/terima/<?= $aduan['id_aduan']; ?>">Terima</a>
                        <!-- <a class="badge bg-primary text-decoration-none float-end ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a> -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>