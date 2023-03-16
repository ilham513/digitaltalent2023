<?php
if(isset($_POST['suhu'])){
	$celcius = $_POST['suhu'];
}else{
	die('<meta content=”3; url=Hitung_Suhu.php” http-equiv=”refresh”> silahkan masukan suhu');
}

$fahrenheit = $celcius * 9/5 + 32;
$reamur = $celcius * 3/5;
$kelvin = $celcius + 273;

// File json yang akan dibaca
$file = "tugas3_Ilham.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Data array baru
$data [] = array(
	'celcius'     => $celcius,
	'fahrenheit'  => $fahrenheit,
	'reamur' 	  => $reamur,
	'kelvin' 	  => $kelvin
);

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// echo '<pre>';print_r($jsonfile);echo '</pre>';

// Menyimpan data ke dalam anggota.json
$anggota = file_put_contents($file, $jsonfile);
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
h4{
  font-size: 24px;
}
button{
  padding: 3px 12px 3px 12px;
}
</style>
</head>
<body>

<div class="center">
	<h4>Hasil Konversi Suhu</h4>

	<div>
		Celclius = <?=$celcius?> &ordm;C<br/>
		Fahrenheit  = <?=$fahrenheit?> &ordm;F<br/>
		Reamur  = <?=$reamur?> &ordm;R<br/>
		Kelvin  = <?=$kelvin ?> &ordm;K<br/>
		
		<hr/>
		
		<h4>Data Sebelumnya</h4>
		
		<?php foreach($data as $suhu): ?>
			<p>
				Celclius = <?=$suhu['celcius'] ?> &ordm;C<br/>
				Fahrenheit  = <?=$suhu['fahrenheit'] ?> &ordm;F<br/>
				Reamur  = <?=$suhu['reamur'] ?> &ordm;R<br/>
				Kelvin  = <?=$suhu['kelvin'] ?> &ordm;K<br/>
			</p>
		<?php endforeach; ?>
	</div>
	
</div>

</body>
</html>