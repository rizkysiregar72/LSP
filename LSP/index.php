<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container col-6 mt-3">
        <div class="card">
            <div class="card-header bg-primary text-white">Input Data</div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control col-md-4"placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control col-md-4"placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control col-md-4"placeholder="Masukan No Telepon">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="daftar" class="btn btn-primary">Daftar</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>

                <?php

                include "koneksi.php";
                if(isset($_POST['daftar'])) {
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat']; 
                    $no_telp = $_POST['no_telp'];
                    
                    mysqli_query($koneksi, "INSERT INTO kustomer (nama,alamat,no_telp) VALUES ('$nama','$alamat','$no_telp') ") or die(mysqli_error($koneksi));  

                ?>
                <div class="text-center"><h5>Silahkan Tunggu</h5></div>
                <meta http-equiv="refresh" content="1; url='tampil.php">
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>