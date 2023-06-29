<?php 

include('koneksi.php');

$idgambar = $_GET['idgambar'];

$sqlDelete= mysqli_query($conn, "DELETE FROM galeri WHERE idgambar='$idgambar'");

if($sqlDelete)
	header('location: galeri.php');
else
	echo "Hapus Gambar gagal";

 ?>