<?php

include "koneksi.php";
$id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM kustomer WHERE id='$id' ") or die(mysqli_error($koneksi));  

?>
<div class="text-center"><h2>Hapus Berhasil</h2></div>
<meta http-equiv="refresh" content="1; url='tampil.php">
