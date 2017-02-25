<?php include 'validasi.php'; ?>
    <form action="?open=insertbukus" method="post">
        <table>
            <tr>
                <td>ISBN</td>
                <td>: <input type="text" name="ISBN"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td>: <input type="text" name="nama_buku" ></td>
            </tr>
            <tr>
                <td>banyak_buku</td>
                <td>: <input type="text" name="banyak_buku"></td>
            </tr>
			<tr>
                <td>Buku</td>
                <td><img itemprop="image" ng-src="here.jpg"></td>
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
