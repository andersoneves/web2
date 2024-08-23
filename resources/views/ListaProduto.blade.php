@extends('base')
@section('main')
	@foreach ($produtos as $produto)
	<div class="row">
	    <div class="col-3">{{$produto->name}} </div>
	    <div class="col-3" >{{$produto->descricao}} </div>
	    <div class="col-3" >{{$produto->preco}} </div>
	</div>
	@endforeach
@endsection