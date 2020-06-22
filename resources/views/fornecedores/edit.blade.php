@extends('layouts.index')

@section('conteudo')

    <form action="{{route('fornecedores.update', array('fornecedore'=>$fornecedor->IDFornecedor))}}" method="post" class="form-group">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="NomeCompanhia">NomeCompanhia</label>
            <input type="text" name="NomeCompanhia" id="nome" required autocomplete="off" value="{{$fornecedor->NomeCompanhia}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="NomeContato">NomeContato</label>
            <input type="text" name="NomeContato" id="NomeContato" autocomplete="off" value="{{$fornecedor->NomeContato}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="TituloContato">TituloContato</label>
            <input type="text" name="TItuloContato" id="TituloContato" autocomplete="off" value="{{$fornecedor->TItuloContato }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Endereco">Endereço</label>
            <input type="text" name="Endereco" id="Endereco" autocomplete="off" value="{{$fornecedor->Endereco}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Cidade">Cidade</label>
            <input type="text" name="Cidade" id="Cidade" autocomplete="off" value="{{$fornecedor->Cidade}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Regiao">Região</label>
            <input type="text" name="Regiao" id="Regiao" autocomplete="off" value="{{$fornecedor->Regiao}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="CEP" autocomplete="off" value="{{$fornecedor->cep}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" name="Pais" id="Pais" autocomplete="off" value="{{$fornecedor->Pais}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="tel" name="Telefone" id="Telefone" autocomplete="off" value="{{$fornecedor->Telefone}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Fax">Fax</label>
            <input type="tel" name="Fax" id="Fax" autocomplete="off" value="{{$fornecedor->Fax}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="Website">Website</label>
            <input type="text" name="Website" id="Website" autocomplete="off" value="{{$fornecedor->Website}}" class="form-control">
        </div>

        <input type="submit" value="Atualizar" class="btn btn-lg btn-primary">
    </form>

@endsection