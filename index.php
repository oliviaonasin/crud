<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title>MY BLOG</title>
</head>

   <body  style="background: pink">
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
  <h1>Assalamualaikum Selamat Datang :)</h1>
  
  </header>
  
  <h4> DaftarMenu</h4>
  <nav>
    <ul>
      <li><a href="register.php">add post</a></li>
      <li><a href="log.php">baca post</a></li>
    </ul>
  </nav>
  
  
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran  berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>
  
  
<H1> TIMELINE BUAH</H1>

      </body>
</html>