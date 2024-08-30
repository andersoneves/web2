@extends('base')
@section('main')
<div>
    <form method="POST" action="{{url('/produtos/atualizar',$produto->id)}}">
        @csrf
        <div class="row">
            <label class="col-4 offset-4">Nome</label>
            <input class="col-4 offset-4" type="text" name="nome" value="{{$produto->name}}">
        </div>
        <div class="row">
            <label class="col-4 offset-4">Descicao</label>
            <textarea class="col-4 offset-4" name="descricao">{{$produto->descricao}} </textarea>
        </div>
        <div class="row">
            <label class="col-4 offset-4" >Preco</label>
            <input class="col-4 offset-4" type="text" name="preco" value="{{$produto->preco}}">
        </div>
        <div class="row">
            <input class="col-3 offset-4 btn btn-primary" style="margin-top: 6px;" type="submit" name="salvar" value="Atualizar">
            
        </div>
    </form>
</div>
@endsection