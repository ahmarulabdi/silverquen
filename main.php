<?php
if(isset($_SESSION['SES_LOGIN'])) {
	echo "<h2>Selamat datang di PurleLibrary !</h2>";
	echo "<b> Anda berhasil login";
	exit;
}
else {
	echo "<h2>Selamat datang di PurleLibrary !</h2>";
	echo "<b>Anda belum login, silahkan <a href='?open=login' alt='Login'>login </a>untuk mengakses sistem ini :)";
}
?>
