<h2>Halaman ini digunakan untuk memanggil session</h2>
<?php
session_start();
echo $_SESSION['npanjang']."<br>";
echo $_SESSION['nPanggilan']."<br>";
echo $_SESSION['int_nim']."<br>";
echo $_SESSION['int_usia']."<br>";
echo $_SESSION['alamat']."<br>";
echo $_SESSION['float_tall'];
?>