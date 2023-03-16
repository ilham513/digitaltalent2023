<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
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
		</div>
		<div class="col-2">
		  <img class="mt-5" width="400px" src="img/model1.png"/>
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
    
	
	
	
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>