<!-- 
Rekap Absen Pertemuan ke-5 (10-Maret-2023)
1. Heru Indrawan
2. Kahfi Muntaha
3. Iis Siti Aisah
4. Londar Datu Pamungkas
5. Helmy Yudhistira Putra
6. Ika Pradana Cintaningtiyas
7. Intan Gilang Perwati
8. Ilham Setia Bhakti
9. Jonathan Nicholas H. Hasibuan
10. Intan Kharisma Pertiwi
11. Haryo Diva
12. Lakeisha Maharani
13. Irgi Winarno
14. Imam Maulana
15. Jonathan March Addriel
16. Idofatullah Sumadikarta
17. Haytsam Adzka Mawla
18. Ikhsan Fikry Fadillah
19. Jihan Qurrotu'ainii
20. Ilham Ramadhan
-->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="#">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Link</a>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Dropdown
			  </a>
			  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				<li><a class="dropdown-item" href="#">Action</a></li>
				<li><a class="dropdown-item" href="#">Another action</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">Something else here</a></li>
			  </ul>
			</li>
			<li class="nav-item">
			  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			</li>
		  </ul>
		  <form class="d-flex">
			<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success" type="submit">Search</button>
		  </form>
		</div>
	  </div>
	</nav>
	
	<div class="container mt-5">
		<h1 class="mb-3">Hello, world!</h1>

		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Email address</label>
		  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>

		<button type="button" class="btn btn-danger">Primary</button>

	</div>
	
	<div class="container mt-5">
		<div class="mb-3">
		  <?php
			require_once 'vendor/fzaninotto/Faker/src/autoload.php';

			$faker = Faker\Factory::create();

			// generate data by accessing properties
			echo $faker->name;

			echo "<br>";

			echo $faker->address;

			echo "<br>";
			  // "426 Jordy Lodge
			  // Cartwrightshire, SC 88120-6700"
			echo $faker->text;
		  ?>
		</div>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>