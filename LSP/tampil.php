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
    <div class="container mt-3">
        <a href="index.php"><button class="btn btn-primary">Tambah Data</button></a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";
                    $no=1;
                    $data = mysqli_query($koneksi, "SELECT * FROM kustomer");
                    while($row=mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama'];?></td>
                    <td><?php echo $row['alamat'];?></td>
                    <td><?php echo $row['no_telp'];?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id'];?>" onclick="return confirm('Yakin Mau Hapus Data <?php echo $row['nama'];?> ?')">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>