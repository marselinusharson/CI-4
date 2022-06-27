<?= $this->extend('layout/template.php'); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Login</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-mx-auto">
                            <form action="<?= base_url('login/proses'); ?>" method="POST">
                                <?= csrf_field(); ?>
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" required>
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                                <br>
                                <input type="submit" class="btn btn-primary" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>