<?php
$panjang = 10;
$lebar = 5;

$alas = 12;
$tinggi = 5;

$jari2 = 10;
?>

<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">

<style>
.center {
  margin: auto;
  margin-top:100px;
  width: 60%;
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
  font-size: 20px;
  color: white;
}
td{
  padding: 2px 2px;
}
body {
  background-color: #163a76;
}
</style>
</head>
<body>

<div class="center">
	<h4>Menghitung Luas Bangun Datar</h4>

	<div>
		Mencari luas persegi panjang jika diketahui:<br/>
		Panjang = <?=$panjang?> cm<br/>
		Lebar = <?=$lebar?> cm<br/>
		Maka luasnya adalah <?="$panjang x $lebar = ".($panjang*$lebar)?> cm<sup>2</sup><br/>
	</div>
	
	<hr/>
	
	<div>
		Mencari luas segitiga jika diketahui:<br/>
		Alas = <?=$alas?> cm<br/>
		Tinggi = <?=$tinggi?> cm<br/>
		Maka luasnya adalah <?="0.5 x $alas x $tinggi = ".(0.5*$alas*$tinggi)?> cm<sup>2</sup><br/>
	</div>
	
	<hr/>
	
	<div>
		Mencari luas lingkaran jika diketahui:<br/>
		Jari-jari = <?=$jari2?> cm<br/>
		Maka luasnya adalah <?="&pi; x $jari2 x $jari2 = ".(3.14*$jari2*$jari2)?> cm<sup>2</sup><br/>
	</div>
</div>

</body>
</html>