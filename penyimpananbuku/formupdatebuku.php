<?php include 'validasi.php'; ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>update data</title>
    </head>
    <body>
        <?php
        include 'koneksi.php';
        $ISBN = $_GET["ISBN"];

        $query = "select * from buku where ISBN='$ISBN'";
        $result = mysqli_query($conn,$query);

        if ($result) {
            $rows = mysqli_fetch_array($result);
        }
        $nama_buku = $rows[1];
        $jumlah_buku = $rows[2];





         ?>
        <form action="?open=formupdatebukus" method="post">
            <table>
                <tr>
                    <td>ISBN :</td>
                    <!-- <td><a name="ISBN" value="<?php echo $ISBN;?>"><?php echo $ISBN;?></a></td> -->
                    <td><input type="text" name="ISBN" value="<?php echo $ISBN;?>"></td>
                </tr>
                <tr>
                    <td>nama buku :</td>
                    <td><input type="text" name="nama_buku" value="<?php echo $nama_buku;?>"></td>
                </tr>
                <tr>
                    <td>jumlah buku :</td>
                    <td><input type="text" name="jumlah_buku" value="<?php echo $jumlah_buku;?>"></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>


                        <input type="submit" name="update" value="update">
                        <a href="?open=tampilbuku"><input type="button" name="kembali" value="kembali"></a>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
