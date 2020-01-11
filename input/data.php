<!DOCTYPE html>
<html>
<title>Aplikas Ku</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
  <div class="w3-top">
  <div class="w3-bar w3-blue w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-left" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Input</a>
    <a href="data.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small ">Data</a>
  </div>
  <div id="nav" class="w3-bar-block w3-white w3-text-blue w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-light-blue" onclick="myFunction()">Input</a>
    <a href="data.php" class="w3-bar-item w3-button w3-padding-large w3-hover-light-blue" onclick="myFunction()">Data</a>
  </div>
<div class="w3-container">
  <h2 class="w3-text-blue w3-center">Data Pasien</h2>
  <hr>  
  <div class="w3-container">
  	<table class="w3-table-all w3-hoverable w3-border w3-card w3-container">
   
      <tr class="w3-blue">
      	<th>No</th>
        <th>Nama</th>
        <th>No KTP</th>
        <th>Email</th>
        <th>Nomor HP</th>
        <th colspan="2" class="w3-center">Aksi</th>
      </tr>
    <?php 
		include "koneksi.php";

		$data = "SELECT * FROM mhs";
		$hasil = mysqli_query($konek,$data) or die (mysqli_connect_error());
		$nomor = 1;
		while($isidata = mysqli_fetch_array($hasil)){
	?>
    <tr>  
        <td><?php echo $nomor++; ?>  </td>
        <td><?php echo $isidata['nama']; ?></td>
        <td><?php echo $isidata['nim']; ?>  </td>
        <td><?php echo $isidata['email']; ?></td>
        <td><?php echo $isidata['nohp']; ?></td>
        <td><a href="formedit.php?id=<?php echo $isidata['id']; ?>" class="w3-text-blue" style="text-decoration: none;" >Edit</a></td>
        <td><a href="hapus.php?id=<?php echo $isidata['id']; ?>" class="w3-text-blue" style="text-decoration: none;" onclick="return confirm('Yakin hapus data?')">Hapus</a></td>
    </tr>
    <?php 
    	}
     ?>
    
  </table>
  </div>
  

</div>
<div class="w3-bottom">
    
  <footer class="w3-footer w3-blue w3-center w3-container" style="padding: 5%;">
    &copy; Puskesmas Kepulauan Seribu Utara
  </footer>
</div>
<script>

function myFunction() {
  var x = document.getElementById("nav");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>


</body>
</html> 