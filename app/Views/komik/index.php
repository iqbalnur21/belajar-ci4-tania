<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3 mb-3">Daftar Komik</h1>
            <table class="table align-middle table-hover">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 50px;">#</th>
                        <th scope="col" style="width: 100px;">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col" style="width: 100px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($komik) && !empty($komik)) : ?>
                        <?php $i = 1; ?>
                        <?php foreach ($komik as $k) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td>
                                    <img src="/img/<?= $k['sampul']; ?>" alt="<?= $k['judul']; ?>" class="rounded shadow-sm" style="width: 80px; height: 110px; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="fw-bold fs-5"><?= $k['judul']; ?></div>
                                    <?php if (!empty($k['sinopsis'])) : ?>
                                        <p class="text-secondary small mb-0 mt-1"><?= $k['sinopsis']; ?></p>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a href="/komik/<?= $k['slug'] ?? ''; ?>" class="btn btn-success btn-sm">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td colspan="4" class="text-center py-4 text-muted">
                                Belum ada data komik di database.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
