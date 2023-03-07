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
	<form action="#" method="GET">
		Masukan Nilai UAS <input type="number" name="nilai"> </br>
		<button type="submit">Tentukan Grade</button>
	</form>
	<p>
	<?php 
	if (isset($_GET['nilai'])) {
		$nilai = $_GET['nilai'];
		
		switch ($nilai) {
		  case ($nilai >=80):
			$grade = "A";
			break;
		  case ($nilai >=60):
			$grade = "B";
			break;
		  case ($nilai >=40):
			$grade = "C";
			break;
		  case ($nilai >=20):
			$grade = "D";
			break;
		  default:
			$grade = "E";
			break;  
		}
		
		echo "Nilai UAS Anda adalah $nilai , Grade $grade";
	}
	?>
	</p>
</div>

</body>
</html>