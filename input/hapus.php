<?php 
	include("koneksi.php");
	$id = $_GET['id'];
	$query = mysqli_query($konek,"DELETE FROM mhs WHERE id = '$id'") or die(mysql_connect_error());
	if($query) {
	    echo "<script>alert('Data berhasil dihapus!'); window.location='data.php';</script>";
	} else {
	    echo "<script>alert('Data gagal dihapus'); window.location='data.php';</script>";
	}
 ?>