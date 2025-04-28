<?php $title = "Pesan Terkirim"; ?>
<?php $this->load->view('templates/header'); ?>

<section class="success-page py-5 text-center">
    <div class="container">
        <h1 class="fw-bold text-success">Terima Kasih!</h1>
        <p class="lead">Pesan Anda telah kami terima. Tim kami akan menghubungi Anda secepatnya.</p>
        <a href="<?php echo base_url(); ?>" class="btn btn-primary mt-3">Kembali ke Beranda</a>
    </div>
</section>

<?php $this->load->view('templates/footer'); ?>
