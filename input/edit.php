<?php 
	include("koneksi.php");

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$email = $_POST['email'];
	$nohp= $_POST['nohp'];

	$query = mysqli_query($konek,"UPDATE mhs SET nama='$nama',nim='$nim',email='$email',nohp='$nohp' WHERE id='$id'") or die(mysqli_connect_error());
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='data.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

 ?>