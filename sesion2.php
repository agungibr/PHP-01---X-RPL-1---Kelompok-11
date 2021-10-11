<?php session_start();

echo "Nama Anda adalah ". $_SESSION['nama'];
echo "<br/><a href= 'sesion1.php'>Kembali ke hal pertama</a>";
?>