@extends('layouts.index')

@section('conteudo')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>NomeCategoria</th>
                <th>Descricao</th>
                <th>Figura</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->IDCategoria}}</td>
                    <td>{{$categoria->NomeCategoria}}</td>
                    <td>{{$categoria->Descricao}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('categorias.edit', array('categoria'=>$categoria->IDCategoria))}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{route('categorias.destroy', array('categoria'=>$categoria->IDCategoria))}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Deletar" class="btn btn-sm">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection