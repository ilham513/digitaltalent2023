<?php
if(isset($_POST['suhu'])){
	$celcius = $_POST['suhu'];
}else{
	die('<meta content=”3; url=Hitung_Suhu.php” http-equiv=”refresh”> silahkan masukan suhu');
}

$fahrenheit = $celcius * 9/5 + 32;
$reamur = $celcius * 3/5;
$kelvin = $celcius + 273;
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
	</div>
	
</div>

</body>
</html>