<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') }}</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var texto=$("#texto").val();
			var classe=$("#classe").val();
			if(texto!=""&& texto !== undefined){
				var card=$("#msg").find(".card");
				card.addClass(classe);
				card[0].innerText=texto;
				$( ".collapse" ).fadeIn( 700 ).delay(600).slideUp( 700 );

			}
		});

	</script>

</head>
<body>
		<ul class="navbar navbar-expand-lg bg-body-tertiary">
	  		<div class="nav-item">
	    		<a class="navbar-brand" href="{{url('pessoas')}}">Pessoas</a>
	  		</div>
	 		 <div class="nav-item">
	    		<a class="navbar-brand active" href="{{url('produtos')}}">Produtos</a>
	  		</div>
	  		<div class="nav-item">
	    		<a class="navbar-brand" href="{{url('produtos/cadastro')}}">Cadastro Produto</a>
	  		</div>
		</ul>
			@if(isset($mensagem))
    			<input type="hidden" name="msg" id="texto" value="{{$mensagem->texto}}">
				<input type="hidden" name="classe" id="classe" value="{{$mensagem->classe}}">
			@endif
	


	<div class="collapse" id="msg">
  		<div class="card card-body">
   			
  		</div>
	</div>

	<div class="row">
		<div class="col-10 offset-1" style="min-height: 60vw;; background-color:#e9e9e9;    ">
			@yield('main')
		</div>
		
	</div>	
	<footer style="background-color: black; color: white; text-align: center; min-height: 50px; padding: 20px">
		 Web2 
	</footer>
</body>
</html>
