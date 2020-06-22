@extends('layouts.index')

@section('conteudo')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>NomeCompanhia</th>
            <th>NomeContato</th>
            <th>TituloContato</th>
            <th>Endereco</th>
            <th>Cidade</th>
            <th>Regiao</th>
            <th>CEP</th>
            <th>Pais</th>
            <th>Telefone</th>
            <th>Fax</th>
            <th>Website</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fornecedores as $fornecedor)
            <tr>
                <td>{{$fornecedor->IDFornecedor}}</td>
                <td>{{$fornecedor->NomeCompanhia}}</td>
                <td>{{$fornecedor->NomeContato}}</td>
                <td>{{$fornecedor->TItuloContato}}</td>
                <td>{{$fornecedor->Endereco}}</td>
                <td>{{$fornecedor->Pais}}</td>
                <td>{{$fornecedor->Telefone}}</td>
                <td>{{$fornecedor->Fax}}</td>
                <td>{{$fornecedor->Website}}</td>
                <td>{{$fornecedor->Cidade}}</td>
                <td>{{$fornecedor->Regiao}}</td>
                <td>{{$fornecedor->cep}}</td>

                <td>
                    <div class="btn-group">
                        <a href="{{route('fornecedores.edit', array('fornecedore'=>$fornecedor->IDFornecedor))}}" class="btn-sm btn-primary">Editar</a>
                        <form action="{{route('fornecedores.destroy', array('fornecedore' =>$fornecedor->IDFornecedor))}}" method="post">
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
    {{$fornecedores->links()}}
@endsection