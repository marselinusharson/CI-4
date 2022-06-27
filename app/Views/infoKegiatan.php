<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <h3 class="text-center">Info Kegiatan</h3>
            <p>Informasi Kegiatan Siswa Bulan Ini</p>
            <ul>
                <?php foreach ($kegiatan as $k) : ?>
                    <li><?= $k['tanggal']; ?> - <?= $k['kegiatan']; ?></li>
                <?php endforeach ?>
            </ul>
            <p>Informasi Kegiatan Bulan Depan</p>
            <ul>
                <li>12 September - Ujian tengah Semester</li>
            </ul>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>