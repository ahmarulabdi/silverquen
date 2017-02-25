<!DOCTYPE html>
<html>
    <head>
        <?php
        session_start();
        include 'koneksi.php';
        ?>
        <link rel="stylesheet" href="css/master.css">
        <meta charset="utf-8">
        <title>daftar buku</title>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include 'header.php';  ?>
            </header>
            <section class='body'>

                <?php
                	 include 'session.php';
                ?>
            </section>
            <footer>
                <?php include 'footer.php';  ?>
            </footer>
        </div>
    </body>
</html>
