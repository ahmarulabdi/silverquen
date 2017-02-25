<?php include 'validasi.php'; ?>
<h1>daftar buku</h1>
    <?php
        $query = "select ISBN,nama_buku,banyak_buku from buku order by ISBN";
        $result = mysqli_query($conn,$query); ?>
        <?
        if ($result){
        ?>
        <table class="data">
            <tr>
                <th width="80">ISBN</th>
                <th width="110">Nama Buku</th>
                <th width="200">Banyak Buku</th>
                <th></th>
            </tr>
            <?php
                while ($rows = mysqli_fetch_row($result)) {
                    $ISBN = $rows[0];
                    $nama_buku = $rows[1];
                    $banyak_buku =$rows[2];

                    ?>
                        <tr>
                            <td>
                                <a href="?open=formupdatebuku&ISBN=<?php echo $ISBN ;?>"><?php echo $ISBN ;?></a>
                            </td>
                            <td>
                                <?php echo $nama_buku ; ?>
                            </td>
                            <td>
                                <?php echo $banyak_buku ;?>
                            </td>
                            <td>

                                <a <a href="?open=deletebuku&ISBN=<?php echo $ISBN; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA BUKU INI ... ?')">
                                    <input type="submit" name="hapus" value="hapus" >
                                <!-- </a> -->

                            </td>

                        </tr>

                    <?php
                }
                 ?>

        </table>
            <?php ?>
    <br/>
    <a href="?open=insertbuku"><input type="button" name="tambah" value="tambah"></a>
