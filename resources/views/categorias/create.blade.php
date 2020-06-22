@extends('layouts.index')

@section('conteudo')

    <form action="{{route('categorias.store')}}" method="POST">
        @csrf

        <input type="hidden" name="IDCategoria" value="{{$categoria[0]->IDCategoria+1}}">
        <h1>Incluir Categoria</h1>
        <div class="form-group">
            <label for="NomeCategoria">NomeCategoria</label>
            <input type="text" name="NomeCategoria" id="NomeCategoria" required class="form-control">
        </div>

        <div class="form-group">
            <label for="Descricao">Descrição</label>
            <input type="text" name="Descricao" id="Descricao" class="form-control">
        </div>
        <input type="submit" value="Criar Categoria" class="btn btn-lg btn-primary">
    </form>

@endsection