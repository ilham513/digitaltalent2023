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
	<?php
		$barang=["Buku Tulis", "Penghapus", "Spidol", "Pensil","Buku"];
		
		echo "".$barang[0]."<br/>";
		echo "".$barang[1]."<br/>";
		echo "".$barang[2]."<br/>";
		echo "".$barang[3]."<br/>";
		echo "".$barang[4]."<br/>";
	?>
</div>

</body>
</html>