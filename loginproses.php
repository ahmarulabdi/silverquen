<?php
# MEMBACA TOMBOL LOGIN DARI FILE login.php
if(isset($_POST['btnLogin'])){

	# Baca variabel form
	$txtUser 		= $_POST['txtUser'];
	$txtUser 		= str_replace("'","&acute;",$txtUser);

	$txtPassword	= $_POST['txtPassword'];
	$txtPassword	= str_replace("'","&acute;",$txtPassword);

	# VALIDASI FORM, jika ada kotak yang kosong, buat pesan error ke dalam kotak $pesanError
	$pesanError = array();
	if ( trim($txtUser)=="") {
		$pesanError[] = "Data <b> Username </b>  tidak boleh kosong !";
	}
	if (trim($txtPassword)=="") {
		$pesanError[] = "Data <b> Password </b> tidak boleh kosong !";
	}

	# JIKA ADA PESAN ERROR DARI VALIDASI
	if (count($pesanError)>=1 ){
		echo "<div class='mssgBox'>";
		echo "error <br><hr>";
		// Tampilkan lagi form login
		include "login.php";
	}
	else {
		# LOGIN CEK KE TABEL USER LOGIN
		$mySql = "SELECT * FROM pengguna WHERE username='$txtUser' AND PASS='$txtPassword'";
		$myQry = mysqli_query($conn,$mySql ) or die ("Query Salah : ".mysql_error());
		$myData= mysqli_fetch_array($myQry);
		# JIKA LOGIN SUKSES
		if(mysqli_num_rows($myQry) >=1) {
			// Menyimpan Kode yang Login
			$_SESSION['SES_LOGIN'] = $myData['kd_user'];
			// Refresh
			echo "<meta http-equiv='refresh' content='0; url=?open=tampilbuku'>";
		}
		else {
			 echo "Login Anda ditolak ";
		}
	}
} // End POST
?>
