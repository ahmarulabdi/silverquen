<?php
    include 'koneksi.php';
    if (isset($_POST["ok"])) {
        $id_peminjam = $_POST["id_peminjam"];
        $nama_peminjam = $_POST["nama_peminjam"];
        $jumlah_peminjam = $_POST["jumlah_peminjam"];


        $sql = "insert into peminjam(id_peminjam,nama_peminjam,jumlah_peminjam)".
        "values('$id_peminjam','$nama_peminjam','$jumlah_peminjam')";

        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "data tersimpan";
        }
        else {
            echo "GAGAL";
        }
    }
 ?>
