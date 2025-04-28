<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="hero position-relative">
        <div class="overlay"></div>
        <div class="container">
            <div class="row min-vh-75 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content text-white">
                        <h1 class="display-4 fw-bold mb-4">Memanggang Kesuksesan Bersama</h1>
                        <p class="lead mb-4">Bergabunglah dengan TukangRoti.com dan jadilah bagian dari jaringan bakery premium terkemuka di Indonesia.</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="<?php echo base_url('partner'); ?>" class="btn btn-primary btn-lg">Jadi Partner</a>
                            <a href="<?php echo base_url('product'); ?>" class="btn btn-outline-light btn-lg">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="<?php echo base_url('assets/images/about-company.jpg'); ?>" alt="About TukangRoti.com" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <div class="section-header mb-4">
                        <h2 class="fw-bold">Tentang TukangRoti.com</h2>
                        <div class="divider"></div>
                    </div>
                    <p>TukangRoti.com didirikan pada tahun 2015 dengan visi menjadi jaringan bakery premium terbesar di Indonesia. Diawali dengan satu gerai di Jakarta Selatan, kini kami telah hadir di lebih dari 50 lokasi di berbagai kota besar Indonesia.</p>
                    <p>Signature product kami, Coffee Bun, telah menjadi favorit pecinta bakery di Indonesia dengan cita rasa khas yang tidak ditemukan di tempat lain.</p>
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

    <section class="why-partner py-5 bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="fw-bold">Mengapa Bermitra dengan Kami?</h2>
                <div class="divider mx-auto"></div>
                <p class="lead">Dapatkan keuntungan menjadi bagian dari TukangRoti.com</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
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
                <div class="col-md-6 col-lg-3">
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
                <div class="col-md-6 col-lg-3">
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
                <div class="col-md-6 col-lg-3">
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

    <section class="featured-products py-5">
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
                            <img src="<?php echo base_url('assets/images/products/coffee_bun.jpg'); ?>" alt="Coffee Bun" class="img-fluid">
                            <div class="product-tag">Terlaris</div>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Coffee Bun</h5>
                            <p class="mb-0">Roti lembut dengan topping buttery coffee yang renyah di luar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/images/products/cheese_bun.jpg'); ?>" alt="Cheese Bun" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Cheese Bun</h5>
                            <p class="mb-0">Roti lembut dengan isian keju premium yang creamy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/images/products/choco_croissant.jpg'); ?>" alt="Chocolate Croissant" class="img-fluid">
                            <div class="product-tag">Terlaris</div>
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Chocolate Croissant</h5>
                            <p class="mb-0">Croissant berlapis dengan isian coklat berkualitas tinggi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="product-card h-100">
                        <div class="product-img position-relative">
                            <img src="<?php echo base_url('assets/images/products/cinnamon_roll.jpg'); ?>" alt="Cinnamon Roll" class="img-fluid">
                        </div>
                        <div class="product-info p-3">
                            <h5 class="fw-bold">Cinnamon Roll</h5>
                            <p class="mb-0">Roti gulung kayu manis dengan cream cheese frosting.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo base_url('product'); ?>" class="btn btn-outline-primary">Lihat Semua Produk</a>
            </div>
        </div>
    </section>

    <section class="testimonials py-5 bg-light">
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
                                    <img src="<?php echo base_url('assets/images/partners/partner1.jpg'); ?>" alt="Partner 1" class="rounded-circle mb-3" width="80">
                                    <h5 class="fw-bold">Budi Santoso</h5>
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
                                    <img src="<?php echo base_url('assets/images/partners/partner2.jpg'); ?>" alt="Partner 2" class="rounded-circle mb-3" width="80">
                                    <h5 class="fw-bold">Anita Wijaya</h5>
                                    <p class="text-muted">Mitra TukangRoti.com Surabaya</p>
                                    <div class="rating mb-3">
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                    <p class="testimonial-text">"Coffee Bun dari TukangRoti.com langsung menjadi favorit di Surabaya. Tim support sangat membantu dalam tahap awal operasional. Sekarang saya sudah memiliki 3 gerai di kota ini."</p>
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

    <section class="cta py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="cta-box bg-primary text-white text-center p-5 rounded">
                        <h2 class="fw-bold mb-3">Siap
</body>

</html>