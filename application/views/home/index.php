<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>">
    <style>
        .border.p-4.rounded.shadow-sm {
            border: 2px solid #843d0d !important;
        }
    </style>
</head>

<body>

    <section class="about py-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src=" <?php echo base_url('assets/pic/about_home.jpg'); ?>" alt="About TukangRoti.com" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="section-header mb-4">
                        <h2 class="fw-bold">Tentang TukangRoti.com</h2>
                        <div class="divider"></div>
                    </div>
                    <p>Sejak 2017, kami hadir melalui brand TukangRoti dengan semangat menyajikan roti lezat berkualitas untuk semua. Kepercayaan konsumen mendorong kami terus tumbuh, berinovasi, dan dipercaya sebagai pelaku usaha kuliner terkemuka.</p>
                    <p>Tahun 2019, kami memperkuat langkah kami dengan mendirikan PT. ABNA Kuliner untuk membawa profesionalisme, integritas, dan cita rasa terbaik dalam setiap proses produksi. Bersama tim yang solid, kami siap menjangkau lebih luas dan memberikan yang terbaik untuk Indonesia.</p>
                    <div class="d-flex flex-wrap gap-4 mt-4">
                        <div class="achievement text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-store fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">50+</h4>
                            <p class="text-muted">Gerai</p>
                        </div>
                        <div class="achievement text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-city fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">15+</h4>
                            <p class="text-muted">Kota</p>
                        </div>
                        <div class="achievement text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                            <h4 class="fw-bold">500+</h4>
                            <p class="text-muted">Karyawan</p>
                        </div>
                    </div>
                    <a href="<?php echo base_url('company'); ?>" class="btn btn-outline-primary mt-4">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <section class=" why-partner py-5 bg-light" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Mengapa Bermitra dengan Kami?</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Dapatkan keuntungan menjadi bagian dari TukangRoti.com</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-3">
                                <i class="fas fa-chart-line fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Brand Terkenal</h5>
                            <p class="card-text">Bergabung dengan brand bakery premium yang sudah dikenal oleh masyarakat Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-3">
                                <i class="fas fa-hands-helping fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Dukungan Penuh</h5>
                            <p class="card-text">Tim kami akan mendukung Anda dari proses pembukaan hingga operasional sehari-hari.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-3">
                                <i class="fas fa-graduation-cap fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Training Lengkap</h5>
                            <p class="card-text">Program pelatihan lengkap untuk Anda dan tim dalam mengelola gerai TukangRoti.com.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-duration="1200" data-aos-delay="800">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-box mb-3">
                                <i class="fas fa-bread-slice fa-2x text-primary"></i>
                            </div>
                            <h5 class="card-title fw-bold">Produk Berkualitas</h5>
                            <p class="card-text">Resep eksklusif dan bahan berkualitas premium yang menjadi favorit pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="<?php echo base_url('partner'); ?>" class="btn btn-primary btn-lg">Jadi Mitra Sekarang</a>
            </div>
        </div>
    </section>

    <section class="featured-products py-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Produk Unggulan Kami</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Cita rasa autentik yang membuat pelanggan kembali lagi</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/pic/Tiger_Roll.JPG'); ?>" alt="Coffee Bun" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Tiger Roll</h5>
                            <p class="mb-0"><i>"Rasakan sensasi lembutnya roti premium dengan lapisan buttery coffee renyah yang menggoda setiap gigitan. Tiger Roll, pilihan sempurna untuk teman kopi atau momen istimewa Anda!"</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/pic/Brownie.JPG'); ?>" alt="Cheese Bun" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Brownie</h5>
                            <p class="mb-0"><i>"Kenikmatan tiada tara! Brownie lembut berpadu dengan isian keju premium yang creamy, menghadirkan rasa mewah dalam setiap potongan. Satu gigit, langsung jatuh cinta!"</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/pic/Chocolate_Bun.JPG'); ?>" alt="Chocolate Croissant" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Chocolate Bun</h5>
                            <p class="mb-0"><i>"Croissant berlapis dengan isian coklat berkualitas tinggi yang lumer di mulut. Chocolate Bun, sahabat setia pecinta cokelat sejati, siap manjakan harimu kapan saja!"</i></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/pic/Ori_Bun.JPG'); ?>" alt="Cinnamon Roll" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Original Bun</h5>
                            <p class="mb-0"><i>"Manisnya gulungan kayu manis berpadu dengan cream cheese frosting yang lembut, membuat Original Bun jadi pilihan sempurna untuk memanjakan lidah dan menghangatkan suasana."</i></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo base_url('product'); ?>" class="btn btn-outline-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </section>

    <section class="testimonials py-5 bg-light" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Partner Kami Berkata</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Mendengar pengalaman sukses dari mitra TukangRoti.com</p>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="testimonial-item text-center p-4">
                                    <img src="<?php echo base_url('assets/pic/Vino.jpg'); ?>" alt="Partner 1" class="rounded-circle mb-3" width="80">
                                    <h5 class="fw-bold">Vino Funny</h5>
                                    <p class="text-muted">Mitra TukangRoti.com Bandung</p>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <p class="testimonial-text">"Bergabung dengan TukangRoti.com adalah keputusan bisnis terbaik yang pernah saya ambil. Dengan dukungan tim yang solid dan produk berkualitas, gerai saya mencapai BEP hanya dalam 6 bulan."</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="testimonial-item text-center p-4">
                                    <img src="<?php echo base_url('assets/pic/Hazqy.jpg'); ?>" alt="Partner 2" class="rounded-circle mb-3" width="80">
                                    <h5 class="fw-bold">Hazqy Skibidy</h5>
                                    <p class="text-muted">Mitra TukangRoti.com Surabaya</p>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <p class="testimonial-text">"Chocolate Bun dari TukangRoti.com langsung menjadi favorit di Surabaya. Tim support sangat membantu dalam tahap awal operasional. Sekarang saya sudah memiliki 3 gerai di kota ini."</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Penambahan Customer feedback -->
    <section class="customer-feedback py-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Apa Kata Pelanggan Kami</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Pendapat mereka tentang produk kami.</p>
            </div>

            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <div class="border p-4 rounded shadow-sm">
                            <p><i>"Original Bun-nya luar biasa! Renyah di luar, lembut di dalam. Wajib coba!"</i></p>
                            <h6 class="fw-bold">- Lestari, Jakarta</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="border p-4 rounded shadow-sm">
                            <p><i>"Tempat favorit saya untuk ngopi dan ngemil bareng teman. Cozy banget!"</i></p>
                            <h6 class="fw-bold">- Rian, Bandung</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="border p-4 rounded shadow-sm">
                            <p><i>"Brownie kejunya bikin nagih. Anak-anak juga suka banget."</i></p>
                            <h6 class="fw-bold">- Yuni, Surabaya</h6>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

                <!-- Indicators -->
                <div class="carousel-indicators mt-4">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Penambahan Embed Youtube -->
    <section class="video-promo py-5 bg-light" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Lihat Video Tentang Kami</h2>
                <div class="divider mx-auto"></div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/6ZKc7wewiEQ" title="Video 1" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/t7qSfRmvHpo" title="Video 2" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/VeM9jj3JXok" title="Video 3" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Promosi Influencer -->
    <section class="py-5 bg-light" data-aos="fade-up" data-aos-duration="1200">
        <div class="section-header text-center mb-5">
            <h2 class="fw-bold">Video Promosi oleh Influencer</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="container">
            <div class="row justify-content-center">

                <!-- Video Pertama -->
                <div class="col-md-6 mb-4">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/reel/C3tuUHhv6_t/"
                        data-instgrm-version="14"
                        style="width: 100%; max-width: 100%; margin: auto; border: none;">
                    </blockquote>
                </div>

                <!-- Video Kedua -->
                <div class="col-md-6 mb-4">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/C78QhTap6UE/"
                        data-instgrm-version="14"
                        style="width: 100%; max-width: 100%; margin: auto; border: none;">
                    </blockquote>
                </div>

            </div>
        </div>
    </section>

    <!-- Instagram Embed Script -->
    <script async src="//www.instagram.com/embed.js"></script>


    <!-- Penambahan alamat -->
    <section class="office-address py-5" data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2 class="fw-bold">Kantor Pusat Kami</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Kami siap melayani Anda dari lokasi strategis di pusat kota.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h5 class="fw-bold">Alamat</h5>
                            <p class="mb-2">
                                Jalan Rajawali Raya No. 31 Perumnas 1, Bekasi Selatan, Jawa Barat 17144.
                            </p>
                            <h6 class="fw-bold mt-4">Kontak</h6>
                            <p class="mb-1">Telepon: 021-894-65550</p>
                            <p class="mb-1">Email: info@tukangroti.com</p>
                        </div>
                    </div>
                    <!-- Google Maps Embed -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126919.13751493947!2d106.89932306934705!3d-6.2343019944752065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d353c349d7d%3A0x49860097903ee319!2sTukangRoti.com!5e0!3m2!1sid!2sid!4v1745981221645!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
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