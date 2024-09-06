@extends('base')
@section('main')
	@foreach ($produtos as $produto)
	<div class="row" style="border: 1px solid black; margin-top: 1px">
	    <div class="col-3">{{$produto->name}} </div>
	    <div class="col-3" >{{$produto->descricao}} </div>
	    <div class="col-3" >{{$produto->preco}} </div>
	   
	    <div class="col-1"> <a href="{{url('produtos/editar',$produto->id)}}"> <button type="button" class="btn btn-primary">Editar</button> </a> </div>

	    <div class="col-1"> 
	    	<a href="{{url('produtos/excluir',$produto->id)}}">
	    		<button type="button" class="btn btn-danger">Excluir</button> 
	    	</a>
	    </div>

	</div>
	@endforeach
@endsection
