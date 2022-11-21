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
<?php 
    include "koneksi.php";
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM kustomer where id='$id' ");
    $row = mysqli_fetch_array($data);
?>
<body>
    <div class="container col-6 mt-3">
        <div class="card">
            <div class="card-header bg-success text-white">Edit Data</div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control col-md-4" placeholder="Masukan Nama" value="<?php echo $row['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control col-md-4"placeholder="Masukan Alamat" value="<?php echo $row['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="form-control col-md-4"placeholder="Masukan No Telepon" value="<?php echo $row['no_telp']; ?>">
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>

                <?php

                include "koneksi.php";
                if(isset($_POST['edit'])) {
                    $nama = $_POST['nama'];
                    $alamat = $_POST['alamat']; 
                    $no_telp = $_POST['no_telp'];
                    
                    mysqli_query($koneksi, "UPDATE kustomer SET nama='$nama', alamat='$alamat', no_telp='$no_telp' WHERE id='$id' ") or die(mysqli_error($koneksi));  

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