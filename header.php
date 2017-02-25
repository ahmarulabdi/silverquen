
<html>
<h1 id='headerdashboard'>Purple Library</h1>
<?php
if(isset($_SESSION['SES_LOGIN'])) {
?>
    <ul>
        <li><a href="?open=tampilbuku">Daftar Buku</a></li>
        <li><a href="?open=tampilpeminjam">Daftar Peminjaman</a></li>
        <li><a href="?open=about">About</a></li>
        <li><a href="?open=logout">Log out</a></li>
    </ul>
<?php
}
else { ?>
<ul>
    <li><a href='?open=login' title='Login System'>Login</a></li>
</ul>
<?php } ?>
</html>
