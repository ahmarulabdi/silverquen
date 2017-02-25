<?php
    include 'koneksi.php';
    if (isset($_POST["update"])) {
        $ISBN = $_POST["ISBN"];
        $nama_buku = $_POST["nama_buku"];
        $jumlah_buku = $_POST["jumlah_buku"];

        $sql = "update buku set nama_buku = '$nama_buku',banyak_buku = '$jumlah_buku' where ISBN = '$ISBN'" ;

        mysqli_query($conn,$sql);


    }
 ?>
 <a href="?open=tampilbuku">lihat pembaruan !!</a>
