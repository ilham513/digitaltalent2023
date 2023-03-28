<?php
$cabang = ['bekasi','bogor','bandung','jakarta','bali'];

//urutkan array asscending
sort($cabang);
// var_dump($cabang);die();


// File json yang akan dibaca
$file = "data.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>latihan 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
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
	
	#myBtn {
	  display: none; /* Hidden by default */
	  position: fixed; /* Fixed/sticky position */
	  bottom: 20px; /* Place the button at the bottom of the page */
	  right: 30px; /* Place the button 30px from the right */
	  z-index: 99; /* Make sure it does not overlap */
	  border: none; /* Remove borders */
	  outline: none; /* Remove outline */
	  background-color: white; /* Set a background color */
	  color: #163a76; /* Text color */
	  cursor: pointer; /* Add a mouse pointer on hover */
	  padding: 8px; /* Some padding */
	  border-radius: 10px; /* Rounded corners */
	  font-size: 18px; /* Increase font size */
	}

	#myBtn:hover {
	  background-color: #555; /* Add a dark-grey background on hover */
	}

	</style>

  </head>
  <body>
  
	<nav class="navbar navbar-light bg-light">
	  <div class="container-fluid">
		<a class="navbar-brand ms-5" href="#">
		  <img src="img/logo.png" alt="home" width="129px">
		</a>
	  </div>
	</nav>

	<div class="container row px-5">
		<div class="col-10 px-5">
		  	<div class="container mt-5">
				<h1 class="mb-3">Form Pemesanan Laundry</h1>

				<form action="latihan1_go.php" method="post">
				  <div class="form-group mb-3">
					<label for="exampleFormControlInput1" class="mb-1">Cabang</label>
					<select name="cabang" class="form-select" aria-label="Default select example">
					  <option hidden>Pilih Cabang</option>
					<?php foreach($cabang as $cabang): ?>
					  <option value="<?= $cabang ?>"><?= ucfirst($cabang) ?></option>
					<?php endforeach; ?>
					</select>
				  </div>
				  
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect1" class="mb-1">Nama Pelanggan</label>
					<input name="nama" type="text" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="form-group mb-3">
					<label for="exampleFormControlSelect2" class="mb-1">No. HP</label>
					<input name="hp" type="text" class="form-control" id="exampleInputPassword1">
				  </div>
				  <div class="form-group mb-3">
					<label for="exampleFormControlTextarea1">Jumlah (KG)</label>
					<input name="jumlah" type="number" class="form-control" id="exampleInputPassword1">
				  </div>
				  
				  <button type="submit" class="btn btn-success">Pesan</button>
				</form>				
				
			</div>
		</div>
		<div class="col-2">
		  <img class="mt-5" width="400px" src="img/laundry.png"/>
		</div>
	</div>
	
	

	<div class="container mt-5">
		<h1 class="mb-3">History Pemesanan Laundry</h1>

	<div class="mb-3">
		<table class="table table-light ta table-striped">
		  <thead>
			<tr>
			  <th scope="col">No</th>
			  <th scope="col">Cabang</th>
			  <th scope="col">Nama Pemesan</th>
			  <th scope="col">No HP</th>
			  <th scope="col">Jumlah</th>
			  <th scope="col">Tagihan</th>
			  <th scope="col">Diskon</th>
			  <th scope="col">Tagihan Akhir</th>
			</tr>
		  </thead>
		  <tbody>
		<?php foreach($data as $i=>$data): ?>
			<tr>
			  <th scope="row"><?=$i+1?></th>
			  <td><?= ucfirst($data['cabang'])?></td>
			  <td><?= ucfirst($data['nama'])?></td>
			  <td><?= $data['hp']?></td>
			  <td><?= $data['jumlah']?> KG</td>
			  <td>Rp. <?= number_format($data['tagihan'])?></td>
			  <td>Rp. <?= number_format($data['diskon'])?></td>
			  <td>Rp. <?= number_format($data['tagihan_akhir'])?></td>
			</tr>
		<?php endforeach; ?>
		  </tbody>
		</table>
		</div>
	</div>

	
	
	
	
	
	
	<div class="container-fluid text-light" style="margin-top: 100px;">
	  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 px-2 my-4 border-top">
		<p class="col-md-4 mb-0 text-light">Ilham Setia Bhakti</p>

		<a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
		  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
		</a>

		<ul class="nav col-md-4 justify-content-end">
		  <li class="nav-item"><a target="_blank" href="https://www.linkedin.com/in/isetiabhakti/" class="nav-link px-2 text-light">Linkedin |</a></li>
		  <li class="nav-item"><a target="_blank" href="https://www.behance.net/ilham513" class="nav-link px-2 text-light">Portfolio |</a></li>
		  <li class="nav-item"><a target="_blank" href="https://isetiabhakti.medium.com/" class="nav-link px-2 text-light">Blog |</a></li>
		  <li class="nav-item"><a target="_blank" href="https://github.com/ilham513/" class="nav-link px-2 text-light">Github</a></li>
		</ul>
	  </footer>
	</div>
    
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<script>
	// Get the button
	let mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
	</script>
  </body>
</html>