<?php $title = "Produk Kami"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
                    ['name' => 'Chocolate Bun', 'image' => 'Choco_Bun.JPG', 'desc' => 'Lelehan cokelat manis dalam balutan roti kopi yang lembut dan harum.'],
                    ['name' => 'Original Bun', 'image' => 'Ori_Bun.JPG', 'desc' => 'Roti kopi lembut berisi mentega yang meleleh, menghadirkan rasa gurih dan harum yang menggoda di setiap gigitan.'],
                    ['name' => 'Tiger Roll', 'image' => 'Tiger_Roll.JPG', 'desc' => 'Croissant gulung premium dengan lapisan cokelat lezat dan tampilan menggoda.'],
                    ['name' => 'Brownie', 'image' => 'Brownie.JPG', 'desc' => 'Brownie lembut berpadu kayu manis dan topping frosting yang menggugah selera.'],
                    ['name' => 'Roti Tawar', 'image' => 'Roti_Tawar.JPG', 'desc' => 'Roti serbaguna dengan aroma kayu manis yang ringan dan tekstur lembut.'],
                    ['name' => 'Roti Ice Cream', 'image' => 'Roti_Icecream.JPG', 'desc' => 'Paduan unik roti dan es krim yang manis, menyegarkan, dan bikin ketagihan.'],
                    ['name' => 'Roti Bun Lima Rasa', 'image' => 'Roti_Bun5.JPG', 'desc' => 'Lima varian rasa dalam satu sajian bun warna-warni yang manis dan harum.']
                ];
                foreach ($products as $product): ?>
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="<?php echo base_url('assets/image/' . $product['image']); ?>" class="card-img-top"
                                style="height: 12.5rem; object-fit: cover;"
                                alt="<?php echo $product['name']; ?>">
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