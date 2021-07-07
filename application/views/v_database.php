<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATA PENERIMA BOS 2020 Kabupaten Siak</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>DATA PENERIMA BOS 2020 Kabupaten Siak</h2>
        <a href="" class="btn btn-warning">Tambah</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPSN</th>
                    <th>Nama Sekolah</th>
                    <th>Besar Bantuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($Database as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['NPSN'] ?></td>
                        <td><?= $u['Nama_Sekolah'] ?></td>
                        <td><?= $u['Besaran_Bantuan'] ?></td>
                        <td>
                            <a href="<?= base_url() ?>database/hapus/<?=$u['NPSN']?>" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-primary">Ubah</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>