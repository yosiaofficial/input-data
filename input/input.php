<?php 
	include("koneksi.php");

	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$nohp= $_POST['nohp'];

	$query = mysqli_query($konek,"INSERT INTO mhs (nama,nim,email,nohp) VALUES ('$nama','$nim','$email','$nohp')") or die(mysqli_connect_error());

if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='data.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

 ?>