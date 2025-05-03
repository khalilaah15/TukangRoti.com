<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitra</title>
</head>

<body>
    <?php $title = "Daftar Pendaftar Mitra"; ?>

    <section class="page-header py-5 text-center bg-light">
        <div class="container">
            <h1 class="fw-bold">Daftar Pendaftar Mitra</h1>
            <p class="lead">Kelola pendaftaran yang masuk</p>
        </div>
    </section>

    <section class="partner-list py-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-nowrap">
                    <thead class="table-light text-center">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Kota</th>
                            <th>Alamat</th>
                            <th>Pesan</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($partners as $partner): ?>
                            <tr>
                                <td class="text-break"><?php echo $partner->name; ?></td>
                                <td class="text-break"><?php echo $partner->email; ?></td>
                                <td><?php echo $partner->phone; ?></td>
                                <td><?php echo $partner->city; ?></td>
                                <td class="text-break"><?php echo $partner->address; ?></td>
                                <td class="text-break"><?php echo $partner->message; ?></td>
                                <td><?php echo date('d-m-Y H:i', strtotime($partner->created_at)); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo base_url('contact/edit/' . $partner->id); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="<?php echo base_url('contact/delete/' . $partner->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


</body>

</html>