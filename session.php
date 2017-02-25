<?php
    if ($_GET) {
        // menampilkan menu ?open
        switch ($_GET['open']) {
            // awal
            case '':
            if(!file_exists ('main.php')) die ("File tidak ada!");
                include 'main.php'; break;

            // login
            case 'login':
                if(!file_exists ('login.php')) die ("File tidak ada!");
                include 'login.php'; break;
            case 'loginproses':
            if(!file_exists ('loginproses.php')) die ("File tidak ada!");
            include 'loginproses.php'; break;

            // buku
            case 'tampilbuku':
                if(!file_exists ('penyimpananbuku/tampilbuku.php')) die ("File tidak ada!");
                include 'penyimpananbuku/tampilbuku.php';break;
            case 'insertbuku':
                if(!file_exists ('penyimpananbuku/insertbuku.php')) die ("File tidak ada!");
                include 'penyimpananbuku/insertbuku.php';break;
            case 'insertbukus':
                if(!file_exists ('penyimpananbuku/insertbukus.php')) die ("File tidak ada!");
                include 'penyimpananbuku/insertbukus.php';break;
            case 'deletebuku':
                if(!file_exists ('penyimpananbuku/deletebuku.php')) die ("File tidak ada!");
                include 'penyimpananbuku/deletebuku.php';break;
            case 'formupdatebuku':
                if(!file_exists ('penyimpananbuku/formupdatebuku.php')) die ("File tidak ada!");
                include 'penyimpananbuku/formupdatebuku.php';break;
            case 'formupdatebukus':
                if(!file_exists ('penyimpananbuku/formupdatebukus.php')) die ("File tidak ada!");
                include 'penyimpananbuku/formupdatebukus.php';break;

            // peminjam
            case 'tampilpeminjam':
                if(!file_exists ('penyimpananpeminjam/tampilpeminjam.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/tampilpeminjam.php';break;
            case 'insertpeminjam':
                if(!file_exists ('penyimpananpeminjam/insertpeminjam.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/insertpeminjam.php';break;
            case 'insertpeminjams':
                if(!file_exists ('penyimpananpeminjam/insertpeminjams.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/insertpeminjams.php';break;
            case 'deletepeminjam':
                if(!file_exists ('penyimpananpeminjam/deletepeminjam.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/deletepeminjam.php';break;
            case 'formupdatepeminjam':
                if(!file_exists ('penyimpananpeminjam/formupdatepeminjam.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/formupdatepeminjam.php';break;
            case 'formupdatepeminjams':
                if(!file_exists ('penyimpananpeminjam/formupdatepeminjams.php')) die ("File tidak ada!");
                include 'penyimpananpeminjam/formupdatepeminjams.php';break;
            case 'about':
                if(!file_exists ('about.php')) die ("File tidak ada!");
                include 'about.php';break;

            // logout
            case 'logout':
                if(!file_exists ('login_out.php')) die ("File tidak ada!");
                include 'login_out.php';break;
        }
    }
    else {
        if(!file_exists ("main.php")) die ("File tidak ada!");
	       include "main.php";
    }
 ?>
