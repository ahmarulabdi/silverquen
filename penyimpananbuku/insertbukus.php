<?php
    include 'koneksi.php';
    if (isset($_POST["ok"])) {
        $ISBN = $_POST["ISBN"];
        $nama_buku = $_POST["nama_buku"];
        $banyak_buku = $_POST["banyak_buku"];


        $sql = "insert into buku(ISBN,nama_buku,banyak_buku)".
        "values('$ISBN','$nama_buku','$banyak_buku')";

        $query = mysqli_query($conn,$sql);
        if ($query) {
            echo "data tersimpan";
        }
        else {
            echo "GAGAL";
        }
    }
 ?>
<!--  -->
