<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="<?= base_url() ?>database/simpanData" method="post">
                    <div class="form-group">
                    <label>NPSN</label>
                        <input type="text" name="NPSN" class="form-control" id="NPSN" placeholder="Masukkan NPSN">
                    </div>
                    <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" name="Nama_Sekolah" class="form-control" id="Nama_Sekolah" placeholder="Masukkan Nama Sekolah">
                    </div>
                    <div class="form-group">
                    <label>Besaran Bantuan</label>
                        <input type="text" name="Besaran_Bantuan" class="form-control" id="Besaran_Bantuan" placeholder="Masukkan Besaran Bantuan">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>