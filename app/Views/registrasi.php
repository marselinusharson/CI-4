<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="row d flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Registrasi</h3>
                </div>
                <div class="card-body">
                    <!-- Slot flash message -->
                    <div class="row">
                        <div class="col">
                            <?php if (session()->getFlashdata('gagal')) : ?>
                                <?php $errors = session()->getFlashdata('gagal') ?>
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <?php foreach ($errors as $error) : ?>
                                            <li <?= $error ?>">

                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('sukses')) : ?>
                                <div class="alert alert-success" role="alert">
                                    <p><?= session()->getFlashdata('sukses'); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col mx-auto ">
                            <form action="<?= base_url('/registrasi/simpan'); ?>" method="POST">
                                <?= csrf_field(); ?>
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" required>
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" required>
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <label for="konfirmasi_password">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="konfirmasi_password" required>
                                <br>
                                <input type="submit" class="btn btn-success" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<?= $this->endSection(); ?>