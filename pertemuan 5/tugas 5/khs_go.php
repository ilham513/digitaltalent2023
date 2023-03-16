<?php
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$total = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);

if ($total >= 90){
	$grade = "Anda Mendapatkan Nilai A";
}elseif ($total >= 80){
	$grade = "Anda Mendapatkan Nilai B";
}elseif ($total >= 60){
	$grade = "Anda Mendapatkan Nilai c";
}else{
	$grade = "Anda Mendapatkan Nilai D";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">

	<style>
	.center {
	  margin: auto;
	  margin-top:100px;
	  width: 60%;
	  padding: 10px;
	  font-size: 18px;
	}
	td{
	  padding: 2px 2px;
	}
	.nunito{
	  font-family: 'Nunito', sans-serif;
	}
	body {
	  background-color: #163a76;
	  color: white;
	  font-family: 'Open Sans', sans-serif;
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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
		<a class="navbar-brand nunito" href="#">BPPTIK</a>
	  </div>
	</nav>
	
	<div class="container mt-5">
		<form action="khs_go.php" method="post">
			<h1 class="mb-3">Nilai Anda</h1>

			<div class="mb-2">
			  Nilai Tugas: <?=$tugas?><br/>
			  Nilai UTS: <?=$uts?><br/>
			  Nilai UAS: <?=$uas?><br/>
			  <b>Total Nilai: <?=$total?></b><br/>
			</div>

			<div class="mb-2">
			  <mark><?=$grade?></mark>
			</div>
		</form>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>