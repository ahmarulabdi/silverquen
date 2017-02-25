<?php
    include 'koneksi.php';
    $ISBN = $_GET['ISBN'];
    if (isset($ISBN)) {
            $sql = "delete from buku where ISBN='$ISBN'";
            mysqli_query($conn,$sql);
    }
 ?>
