<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TukangRoti.com - <?php echo $title ?? 'Bakery Premium Indonesia'; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css'); ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('assets/pic/Logo_nav.jpg'); ?>" alt="Logo_TukangRoti">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('company'); ?>">Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('product'); ?>">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('partner'); ?>">Partner</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>