<?php include 'validasi.php'; ?>
<h1>daftar peminjam</h1>
    <?php
        $query = "select id_peminjam,nama_peminjam,jumlah_peminjam from peminjam order by id_peminjam";
        $result = mysqli_query($conn,$query); ?>
        <?
        if ($result){
        ?>
        <table class="data">
            <tr>
                <th width="80">id peminjam</th>
                <th width="110">Nama peminjam</th>
                <th width="200">Jumlah peminjam</th>
                <th></th>
            </tr>
            <?php
                while ($rows = mysqli_fetch_row($result)) {
                    $id_peminjam = $rows[0];
                    $nama_peminjam = $rows[1];
                    $jumlah_peminjam =$rows[2];

                    ?>
                        <tr>
                            <td>
                                <a href="?open=formupdatepeminjam&id_peminjam=<?php echo $id_peminjam ;?>"><?php echo $id_peminjam ;?></a>
                            </td>
                            <td>
                                <?php echo $nama_peminjam ; ?>
                            </td>
                            <td>
                                <?php echo $jumlah_peminjam ;?>
                            </td>

                            <td>

                                <a <a href="?open=deletepeminjam&id_peminjam=<?php echo $id_peminjam; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA BARANG INI ... ?')">
                                    <input type="submit" name="hapus" value="hapus" >
                                <!-- </a> -->

                            </td>
                        </tr>

                    <?php
                }
                 ?>

        </table>
            <?php  ?>
    <br/>
    <a href="?open=insertpeminjam"><input type="button" name="tambah" value="tambah"></a>
