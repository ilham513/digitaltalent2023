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
	<form action="#" method="GET">
		Nama&nbsp;&nbsp;: <input type="text" name="tnama"> </br>
		Umur&nbsp;&nbsp;: <input type="text" name="tumur"> </br>
		<input type="submit" name="box" value="ok">
	</form>
	
	<hr/>
	
	<?php 
	if (isset($_GET['box'])) {
		echo $_GET['tnama']."<br>";
		echo $_GET['tumur'];
	}
	 ?>
</div>

</body>
</html>