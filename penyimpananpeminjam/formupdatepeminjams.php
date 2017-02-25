<?php
    include 'koneksi.php';
    if (isset($_POST["update"])) {
        $id_peminjam = $_POST["id_peminjam"];
        $nama_peminjam = $_POST["nama_peminjam"];
        $jumlah_peminjam = $_POST["jumlah_peminjam"];

        echo "$id_peminjam";
        echo "$nama_peminjam";
        echo "$jumlah_peminjam";


        $sql = "update peminjam set nama_peminjam = '$nama_peminjam',jumlah_peminjam = '$jumlah_peminjam' where id_peminjam = '$id_peminjam'" ;

        mysqli_query($conn,$sql);


    }
 ?>
 <a href="?open=tampilpeminjam">lihat pembaruan !!</a>
