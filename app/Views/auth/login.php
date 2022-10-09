<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat datang di Perpustakaan FTI</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="name" class="form-control form-control-user" id="name" aria-describedby="nameHelp" placeholder="Masukkan username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                        </div>
                                    </div>
                                    <a href="validasi-user" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="register">Belum Punya Akun? Buat disini  !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<?= $this->endSection(); ?>