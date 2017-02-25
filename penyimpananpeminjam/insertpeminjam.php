<?php include 'validasi.php'; ?>
    <form action="?open=insertpeminjams" method="post">
        <table>
            <tr>
                <td>id peminjam</td>
                <td>: <input type="text" name="id_peminjam"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td>: <input type="text" name="nama_peminjam" ></td>
            </tr>
            <tr>
                <td>jumlah peminjam</td>
                <td>: <input type="text" name="jumlah_peminjam"></td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="ok" value="input">
                    <input type="reset" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>
