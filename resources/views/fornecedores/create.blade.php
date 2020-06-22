@extends('layouts.index')

@section('conteudo')
    <form action="{{route('fornecedores.store')}}" method="post" class="form-group">
        @csrf

        <input type="hidden" name="IDFornecedor" value="{{$fornecedor[0]->IDFornecedor+1}}">
        <div class="form-group">
            <label for="NomeCompanhia">NomeCompanhia</label>
            <input type="text" name="NomeCompanhia" id="nome" required autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="NomeContato">NomeContato</label>
            <input type="text" name="NomeContato" id="NomeContato" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="TituloContato">TituloContato</label>
            <input type="text" name="TItuloContato" id="TituloContato" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Endereco">Endereço</label>
            <input type="text" name="Endereco" id="Endereco" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Cidade">Cidade</label>
            <input type="text" name="Cidade" id="Cidade" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Regiao">Região</label>
            <input type="text" name="Regiao" id="Regiao" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="cep">CEP</label>
            <input type="text" name="cep" id="CEP" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Pais">Pais</label>
            <input type="text" name="Pais" id="Pais" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Telefone">Telefone</label>
            <input type="tel" name="Telefone" id="Telefone" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Fax">Fax</label>
            <input type="tel" name="Fax" id="Fax" autocomplete="off" class="form-control">
        </div>

        <div class="form-group">
            <label for="Website">Website</label>
            <input type="text" name="Website" id="Website" autocomplete="off" class="form-control">
        </div>

        <input type="submit" value="Enviar" class="btn btn-lg btn-primary">
    </form>
@endsection