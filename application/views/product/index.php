<?php $title = "Produk Kami"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="page-header py-5 text-center bg-light">
        <div class="container">
            <h1 class="fw-bold">Produk Unggulan</h1>
            <p class="lead">Nikmati cita rasa khas dari TukangRoti.com</p>
        </div>
    </section>

    <section class="products py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                // Contoh hardcode produk, bisa diganti dari database
                $products = [
                    ['name' => 'Coffee Bun', 'image' => 'coffee_bun.jpg', 'desc' => 'Roti buttery coffee'],
                    ['name' => 'Cheese Bun', 'image' => 'cheese_bun.jpg', 'desc' => 'Isi keju creamy'],
                    ['name' => 'Chocolate Croissant', 'image' => 'choco_croissant.jpg', 'desc' => 'Croissant cokelat premium'],
                    ['name' => 'Cinnamon Roll', 'image' => 'cinnamon_roll.jpg', 'desc' => 'Kayu manis dan frosting']
                ];
                foreach ($products as $product): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo base_url('assets/images/products/' . $product['image']); ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                            <div class="card-body text-center">
                                <h5 class="fw-bold"><?php echo $product['name']; ?></h5>
                                <p class="text-muted"><?php echo $product['desc']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</body>

</html>