<?php $title = "Tentang Kami"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <!-- Bootstrap Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/company.css'); ?>">
    <!-- Head Style -->
    <style>
        .col-md-3 {
            margin-top: 1rem;
            border-right: 1px solid black;
        }

        .col-md-3:last-child {
            border: none;
        }

        .list-unstyled.px-3 i {
            color: #843d0d !important;
        }
    </style>
</head>

<body>
    <section class="page-header py-5 text-center bg-light animate__animated animate__fadeInUp" data-aos="fade-up">
        <div class="container">
            <h1 class="fw-bold">Tentang TukangRoti.com</h1>
            <p class="lead">Perjalanan kami menjadi jaringan bakery premium terbaik di Indonesia</p>
        </div>
    </section>

    <section class="company-profile py-5 animate__animated animate__fadeInUp" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?php echo base_url('assets/pic/Company.jpg'); ?>" class="img-fluid rounded shadow" alt="Sejarah TukangRoti.com">
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Sejarah Kami</h2>
                    <p>Sejak pertama kali beroperasi pada tahun 2017 melalui brand TukangRoti, kami memulai perjalanan kami dari semangat sederhana, menghadirkan roti lezat dengan kualitas terbaik untuk setiap orang. Berbekal tekad dan kerja keras, kami tumbuh menjadi salah satu pelaku usaha kuliner yang dipercaya oleh masyarakat. Seiring waktu, kepercayaan konsumen menjadi bahan bakar utama bagi kami untuk terus berkembang dan berinovasi.</p>

                    <p>Pada tahun 2019, kami resmi mendirikan PT. ABNA Kuliner sebagai bentuk komitmen kami dalam memperkuat struktur bisnis yang lebih profesional dan berkelanjutan. Pengalaman yang terus kami kumpulkan dari tahun ke tahun telah menempa kami menjadi tim yang tidak hanya ahli, tetapi juga memiliki integritas tinggi dalam setiap proses produksi. Dengan fondasi ini, kami siap melangkah lebih jauh, membawa semangat profesionalisme dan cita rasa terbaik ke setiap sudut negeri.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Nilai-Nilai Perusahaan -->
    <section class="core-values py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <h2 class="fw-bold mb-4 text-center">Nilai-Nilai Perusahaan Kami</h2>
            <div class="row text-center">
                <div class="col-md-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="mb-2">
                        <i class="bi bi-shield-check fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Integritas</h5>
                    <p>Menjunjung tinggi kejujuran dan transparansi dalam setiap proses bisnis, demi membangun kepercayaan jangka panjang.</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="mb-2">
                        <i class="bi bi-lightbulb fs-1 text-warning"></i>
                    </div>
                    <h5 class="fw-bold">Inovasi</h5>
                    <p>Terus berkreasi dan beradaptasi untuk menghadirkan produk dan layanan yang relevan dengan perkembangan zaman.</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="mb-2">
                        <i class="bi bi-patch-check fs-1 text-success"></i>
                    </div>
                    <h5 class="fw-bold">Kualitas</h5>
                    <p>Berkomitmen menghadirkan produk berkualitas tinggi yang konsisten dan memuaskan di setiap gigitan.</p>
                </div>
                <div class="col-md-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="mb-2">
                        <i class="bi bi-people fs-1 text-info"></i>
                    </div>
                    <h5 class="fw-bold">Kolaborasi</h5>
                    <p>Membangun sinergi yang kuat antara tim internal dan mitra untuk tumbuh bersama secara berkelanjutan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sertif Penghargaan -->
    <section class="certifications py-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h2 class="fw-bold mb-4 text-center">Sertifikasi & Penghargaan</h2>
            <div class="row justify-content-center text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1200">
                    <img src="<?php echo base_url('assets/pic/2. Piagam Bogasari.jpg'); ?>"
                        class="img-fluid mx-auto d-block"
                        alt="Penghargaan Bogasari">
                    <p class="mt-2">Piagam Penghargaan Bogasari sebagai 50 UMKM Berpengaruh</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section Baru -->
    <section class="about-us-gallery py-5 bg-light" data-aos="fade-up">
        <div class="container">
            <h2 class="fw-bold mb-4 text-center">Tentang Kami</h2>
            <div class="row text-center g-4">
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                    <img src="<?php echo base_url('assets/pic/Interior_Outlet.jpg'); ?>" class="img-fluid rounded shadow-sm mb-3" alt="Interior_Outlet">
                    <h5 class="fw-semibold">Interior Outlet</h5>
                    <p><i>“Suasana outlet kami dirancang nyaman dan menarik, mencerminkan komitmen kami dalam memberikan pelayanan terbaik kepada setiap pelanggan.”</i></p>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="400">
                    <img src="<?php echo base_url('assets/pic/Tim_Pengembang.jpg'); ?>" class="img-fluid rounded shadow-sm mb-3" alt="Tim_Pengembang">
                    <h5 class="fw-semibold">Tim Pengembang</h5>
                    <p><i>“Tim profesional kami terus berinovasi dan berkolaborasi untuk menciptakan produk berkualitas tinggi yang sesuai dengan kebutuhan pasar.”</i></p>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="600">
                    <img src="<?php echo base_url('assets/pic/Tim_Produksi.jpg'); ?>" class="img-fluid rounded shadow-sm mb-3" alt="Tim Produksi">
                    <h5 class="fw-semibold">Tim Produksi</h5>
                    <p><i>“Dengan standar kebersihan dan kualitas tinggi, tim produksi kami memastikan setiap produk diolah dengan teliti dan penuh dedikasi.”</i></p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>