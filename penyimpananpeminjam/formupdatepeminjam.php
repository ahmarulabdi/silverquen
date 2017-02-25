<?php include 'validasi.php'; ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>update peminjam</title>
    </head>
    <body>
        <?php
        include 'koneksi.php';
        $id_peminjam = $_GET["id_peminjam"];

        $query = "select * from peminjam where id_peminjam='$id_peminjam'";
        $result = mysqli_query($conn,$query);

        if ($result) {
            $rows = mysqli_fetch_array($result);
        }
        $nama_peminjam = $rows[1];
        $jumlah_peminjam = $rows[2];





         ?>
        <form action="?open=formupdatepeminjams" method="post">
            <table>
                <tr>
                    <td>id peminjam :</td>
                    <td><input type="text" name="id_peminjam" value="<?php echo $id_peminjam;?>"></td>
                </tr>
                <tr>
                    <td>nama peminjam :</td>
                    <td><input type="text" name="nama_peminjam" value="<?php echo $nama_peminjam;?>"></td>
                </tr>
                <tr>
                    <td>jumlah peminjam :</td>
                    <td><input type="text" name="jumlah_peminjam" value="<?php echo $jumlah_peminjam;?>"></td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>


                        <input type="submit" name="update" value="update">
                        <a href="?open=tampilpeminjam"><input type="button" name="kembali" value="kembali"></a>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>
