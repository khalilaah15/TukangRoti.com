<?php $title = "Produk Kami"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
    </style>
</head>

<body>
    <section class="page-header py-5 text-center bg-light animate__animated animate__fadeInUp">
        <div class="container">
            <h1 class="fw-bold">Produk Unggulan</h1>
            <p class="lead">Nikmati cita rasa khas dari TukangRoti.com</p>
        </div>
    </section>

    <?php
    // Daftar produk dengan kategori
    $products = [
        // Makanan
        ['name' => 'Chocolate Bun', 'image' => 'Choco_Bun.JPG', 'desc' => 'Rp7.000', 'category' => 'makanan'],
        ['name' => 'Original Bun', 'image' => 'Ori_Bun.JPG', 'desc' => 'Rp7000', 'category' => 'makanan'],
        ['name' => 'Roti Tawar', 'image' => 'Roti_Tawar.JPG', 'desc' => 'Rp15.000', 'category' => 'makanan'],
        ['name' => 'Mexican Bun 5 Rasa', 'image' => 'Roti_Bun5.JPG', 'desc' => 'Rp7000 / Pcs', 'category' => 'makanan'],
        ['name' => 'Roti Sobek', 'image' => 'Roti_Sobek.JPG', 'desc' => 'Rp20.000', 'category' => 'makanan'],
        ['name' => 'Tiger Roll', 'image' => 'Tiger_Roll.JPG', 'desc' => 'Rp60.000', 'category' => 'makanan'],
        ['name' => 'Brownie', 'image' => 'Brownie.JPG', 'desc' => 'Rp60.000', 'category' => 'makanan'],
        ['name' => 'Strawberry Bun Ice Cream', 'image' => 'Strawberry_Ice.JPG', 'desc' => 'Rp8000', 'category' => 'makanan'],
        ['name' => 'Vanilla Bun Ice Cream', 'image' => 'Vanilla_Ice.JPG', 'desc' => 'Rp8000', 'category' => 'makanan'],
        ['name' => 'Chocolate Bun Ice Cream', 'image' => 'Chocolate_Ice.JPG', 'desc' => 'Rp8000', 'category' => 'makanan'],
        // Minuman
        ['name' => 'Pinky Squash', 'image' => 'Strawberry.JPG', 'desc' => 'Rp14.000', 'category' => 'minuman'],
        ['name' => 'Lemon Tea', 'image' => 'Lemon_Tea.JPG', 'desc' => 'Rp12.000', 'category' => 'minuman'],
    ];

    // Fungsi menampilkan produk berdasarkan kategori
    function tampilkanProduk($products, $kategori, $judul)
    {
        echo '<section class="products py-5">';
        echo '<div class="container">';
        echo '<h2 class="mb-4 fw-bold">' . $judul . '</h2>';
        echo '<div class="row g-4">';
        foreach ($products as $product) {
            if ($product['category'] === $kategori) {
                echo '<div class="col-md-6 col-lg-3" data-aos="zoom-in-up" data-aos-duration="1100">';
                echo '<div class="card h-100 border-0 shadow-sm">';
                echo '<img src="' . base_url('assets/image/' . $product['image']) . '" class="card-img-top" style="height: 12.5rem; object-fit: cover;" alt="' . $product['name'] . '">';
                echo '<div class="card-body text-center">';
                echo '<h5 class="fw-bold">' . $product['name'] . '</h5>';
                echo '<p class="text-muted">' . $product['desc'] . '</p>';
                echo '</div></div></div>';
            }
        }
        echo '</div></div></section>';
    }

    // Tampilkan berdasarkan kategori
    tampilkanProduk($products, 'makanan', 'Makanan');
    tampilkanProduk($products, 'minuman', 'Minuman');
    ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>