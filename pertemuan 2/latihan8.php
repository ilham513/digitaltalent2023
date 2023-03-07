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
button{
  margin-top:10px;
  padding:4px;
  font-size: 14px;
}
</style>
</head>
<body>

<div class="center">
	<div style="text-align:center;margin-bottom:8px;"><b>Kalkulator Luas Persegi Panjang</b></div>
	<form action="#" method="GET">
		Masukan Panjang <input type="number" name="panjang"> </br>
		Masukan Lebar <input type="number" name="lebar"> </br>
		<button type="submit">Hitung Luas</button>
	</form>
	<p>
	<?php 
	if (isset($_GET['panjang'])) {
		$panjang = $_GET['panjang'];
		$lebar = $_GET['lebar'];
		
		echo "Luas Persegi Panjang adalah ". ($panjang * $lebar);
	}
	?>
	</p>
	
	<hr/>

	<div style="text-align:center;margin-bottom:8px;"><b>Kalkulator Luas Segitiga</b></div>
	<form action="#" method="GET">
		Masukan Alas <input type="number" name="alas"> </br>
		Masukan Tinggi <input type="number" name="tinggi"> </br>
		<button type="submit">Hitung Luas</button>
	</form>
	<p>
	<?php 
	if (isset($_GET['alas'])) {
		$alas = $_GET['alas'];
		$tinggi = $_GET['tinggi'];
		
		echo "Luas Segitiga adalah ". (0.5 * $alas * $tinggi);
	}
	?>
	</p>
	
	<hr/>

	<div style="text-align:center;margin-bottom:8px;"><b>Kalkulator Luas Lingkaran</b></div>
	<form action="#" method="GET">
		Masukan Jari-jari <input type="number" name="jari2"> </br>
		<button type="submit">Hitung Luas</button>
	</form>
	<p>
	<?php 
	if (isset($_GET['jari2'])) {
		$jari2 = $_GET['jari2'];
		
		echo "Luas Lingkaran adalah ". (3.14 * $jari2 * $jari2);
	}
	?>
	</p>
	
	<hr/>

	
</div>

</body>
</html>