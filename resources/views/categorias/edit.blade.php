@extends('layouts.index')

@section('conteudo')
    <form action="{{route('categorias.update', array('categoria'=>$categoria->IDCategoria))}}" method="POST">
        @csrf
        @method('PUT')

        <h1>Editar Categorias</h1>
        <div class="form-group">
            <label for="NomeCategoria">NomeCategoria</label>
            <input type="text" name="NomeCategoria" id="NomeCategoria" required autocomplete="off" value="{{$categoria->NomeCategoria}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Descricao">Descrição</label>
            <input type="text" name="Descricao" id="Descricao" autocomplete="off" value="{{$categoria->Descricao}}" class="form-control">
        </div>
        <input type="submit" value="Atualizar Categoria" class="btn btn-lg btn-primary">
    </form>
@endsection