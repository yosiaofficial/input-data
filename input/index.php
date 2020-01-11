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
<form action="input.php" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" method="post">
<h2 class="w3-center">Masukkan Data Pasien</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nama" type="text" placeholder="Masukkan Nama">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nim" type="text" placeholder="Masukkan No KTP">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="text" placeholder="Masukkan Email">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nohp" type="text" placeholder="Masukkan Nomor HP">
    </div>
</div>


<button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding" type="submit">Simpan</button>

</form>
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
