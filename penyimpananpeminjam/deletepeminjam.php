<?php
    include 'koneksi.php';
    $id_peminjam = $_GET['id_peminjam'];
    if (isset($id_peminjam)) {
            $sql = "delete from peminjam where id_peminjam='$id_peminjam'";
            mysqli_query($conn,$sql);
    }
 ?>
