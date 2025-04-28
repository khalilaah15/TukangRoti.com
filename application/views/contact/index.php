<?php $title = "Pendaftaran Mitra"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <section class="page-header py-5 text-center bg-light">
        <div class="container">
            <h1 class="fw-bold">Daftar Sebagai Mitra</h1>
            <p class="lead">Isi formulir berikut untuk bergabung bersama kami</p>
        </div>
    </section>

    <section class="contact-form py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form action="<?php echo base_url('contact/submit'); ?>" method="post" class="p-4 shadow rounded bg-white">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Alamat Lengkap</label>
                            <textarea name="address" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">Kota</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Alasan Bermitra</label>
                            <textarea name="message" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Tombol untuk menuju halaman list -->
    <div class="container mt-4">
        <div class="text-center">
            <a href="<?php echo base_url('contact/list'); ?>" class="btn btn-secondary">Lihat Daftar Mitra</a>
        </div>
    </div>

</body>

</html>