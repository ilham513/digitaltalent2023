<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">

<style>
.center {
  margin: auto;
  margin-top:80px;
  margin-bottom:80px;
  width: 60%;
  padding: 10px;
  font-family: 'Open Sans', sans-serif;
  color: white;
}
h4{
  font-family: 'Nunito', sans-serif;
  color: white;
  font-size: 20px;
  text-align: center;
}
body {
  background-color: #104e98;
}
</style>
</head>
<body>


<div class="center">
<h4>CETAK BILANGAN GANJIL GENAP 1-100</h4>

<?php
for ($x = 1; $x <= 100; $x++) {	
	echo $x.' adalah Bilangan ';
	
	if ($x % 2 == 0) {
		echo 'Genap';
	}else{
		echo 'Ganjil';
	}
	echo '<br/>';
} 
?>
</div>

</body>
</html>