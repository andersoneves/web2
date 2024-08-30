@extends('base')
@section('main')
<div>
    <form method="POST" action="{{url('/produtos/salvar')}}">
    	@csrf
    	<div class="row">
    		<label class="col-4 offset-4">Nome</label>
    		<input class="col-4 offset-4" type="text" name="nome">
    	</div>
    	<div class="row">
    		<label class="col-4 offset-4">Descicao</label>
    		<textarea class="col-4 offset-4" name="descricao"></textarea>
    	</div>
    	<div class="row">
    		<label class="col-4 offset-4" >Preco</label>
    		<input class="col-4 offset-4" type="text" name="preco">
    	</div>
    	<div class="row">
    		<input class="col-3 offset-4 btn btn-primary" style="margin-top: 6px;" type="submit" name="salvar" value="Salvar">
    		
    	</div>
    </form>
</div>
@endsection