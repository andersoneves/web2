<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
		<ul class="navbar navbar-expand-lg bg-body-tertiary">
	  		<div class="nav-item">
	    		<a class="navbar-brand " aria-current="page" href="#">Pessoas</a>
	  		</div>
	 		 <div class="nav-item">
	    		<a class="navbar-brand active" href="#">Produtos</a>
	  		</div>
	  		<div class="nav-item">
	    		<a class="navbar-brand" href="#">link</a>
	  		</div>
		</ul>
	<div class="row">
		<div class="col-10 offset-1" style="min-height: 60vw;; background-color:#e9e9e9;    ">
			@yield('main')
		</div>
		
	</div>	
	
</body>
</html>
