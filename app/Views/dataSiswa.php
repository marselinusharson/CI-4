<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col md-4">
            <h3 class="text-center">Data Siswa</h3>
            <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Semester</th>
                </tr>
                <?php foreach ($listSiswa as $siswa) : ?>
                    <tr>
                        <td><?= $siswa['nama']; ?></td>
                        <td><?= $siswa['nim']; ?></td>
                        <td><?= $siswa['semester']; ?></td>
                    </tr>

                <?php endforeach ?>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>