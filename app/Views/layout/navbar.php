<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Marsel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/info-kegiatan">Info Kegiatan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/data-siswa">Data Siswa</a>
                </li>
            </ul>
            <!-- Tombol Register Login -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-link">
                    <a href="<?= base_url('login'); ?>" class="btn btn-outline-primary">Login</a>
                </li>
                <li class="nav-link">
                    <a href="<?= base_url('registrasi'); ?>" class="btn btn-outline-success">Register</a>
                </li>
            </ul>
            <!-- Akhir Tombol Register Login -->
        </div>
    </div>
</nav>