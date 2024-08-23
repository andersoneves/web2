@extends('base')
@section('main')
	@foreach ($produtos as $produto)
	<div class="row" style="border: 1px solid black; margin-top: 1px">
	    <div class="col-3">{{$produto->name}} </div>
	    <div class="col-3" >{{$produto->descricao}} </div>
	    <div class="col-3" >{{$produto->preco}} </div>
	</div>
	@endforeach
@endsection